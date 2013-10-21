<?php
session_start();
require_once('db_core.php');
require_once('webservice.php');
require_once('mail.php');
class generic extends webservice
{
	var $db;
	function generic(){
		$this->db = new db_core(); 
	}
	function init(){
		
	}
	function regUser($opt){
		// PUEDEN EXISTIR 3 ESTADOS A LA OPERACION (status)
		// 0: OPERACION EXITOSA
		// 1: EL USUARIO YA EXISTE
		// 2: EXISTIO UN ERROR AL CREARLO POR DB
		// 3: NO SE PUDO ENVIAR EL EMAIL
		$dbo = $this->db;
		if(!$dbo->isExists('users','email',$opt->email))
		{
			$matriz['nombre'] = $opt->name;
			$matriz['email'] = $opt->email;
			$matriz['password'] = md5($opt->password);
			$matriz['active'] = 0;
			$matriz['opeToken'] = $this->getToken('users','opeToken');
			if($dbo->insert('users', $matriz))
			{
				$email = new mail();
				if($email->sendRegMail($opt->email, $matriz['opeToken']))
				{
					$this->returnData(array("status"=>0));
				}
				else
				{
					$dbo->delete('users', 'email', $opt->email);
					$this->returnData(array("status"=>3));
				}
			}
			else
			{
				$this->returnData(array("status"=>2));
			}
		}
		else
		{
			$this->returnData(array("status"=>1));
		}
	}
	function passwordForget($opt){
		// PUEDEN EXISTIR 3 ESTADOS A LA OPERACION (status)
		// 0: OPERACION EXITOSA
		// 1: EL USUARIO YA EXISTE
		// 2: EXISTIO UN ERROR AL CREARLO POR DB
		// 3: NO SE PUDO ENVIAR EL EMAIL
		$dbo = $this->db;
		if($dbo->isExists('users','email',$opt->email))
		{
			$where['email'] = $opt->email;
			$matriz['opeToken'] = $this->getToken('users','opeToken');
			if($dbo->update('users', $matriz, $where))
			{
				$email = new mail();
				if($email->sendForgotMail($opt->email, $matriz['opeToken']))
				{
					$this->returnData(array("status"=>0));
				}
				else
				{
					$this->returnData(array("status"=>3));
				}
			}
			else
			{
				$this->returnData(array("status"=>2));
			}
		}
		else
		{
			$this->returnData(array("status"=>1));
		}
	}
	function activeUser($opt){
		// PUEDEN EXISTIR 3 ESTADOS A LA OPERACION (status)
		// 0: TOKEN INVALIDO
		// 1: OPERACION EXITOSA
		// 2: NO SE PUDO EJECUTAR LA CONSULTA SQL
		$dbo = $this->db;
		if($dbo->isExists('users','opeToken',$opt->token))
		{	
			$matriz['active'] = 1;
			$matriz['opeToken'] = '';
			$where['opeToken'] = $opt->token;
			if($dbo->update('users', $matriz, $where))
			{
				header('Location: ../index.php?active=1');
			}
			else
			{
				header('Location: ../index.php?active=2');
			}
		}
		else
		{
			header('Location: ../index.php?active=0');
		}
	}
	function reDefinePassword($opt){
		// PUEDEN EXISTIR 3 ESTADOS A LA OPERACION (status)
		// 0: OPERACION EXITOSA
		// 1: TOKEN INVALIDO
		// 2: NO SE PUDO EJECUTAR LA CONSULTA SQL
		$dbo = $this->db;
		if($dbo->isExists('users','opeToken',$opt->token))
		{	
			$matriz['password'] = md5($opt->password);
			$matriz['opeToken'] = '';
			$where['opeToken'] = $opt->token;
			if($dbo->update('users', $matriz, $where))
			{
				$this->returnData(array("status"=>0));
			}
			else
			{
				$this->returnData(array("status"=>2));
			}
		}
		else
		{
			$this->returnData(array("status"=>1));
		}
	}
	function login($opt){
		// PUEDEN EXISTIR 3 ESTADOS A LA OPERACION (status)
		// 0: OPERACION EXITOSA
		// 1: NO SE ENCUENTRA EL USUARIO O ES INCORRECTO
		// 2: El usuario no existe
		$dbo = $this->db;
		$retorno['email'] = $opt->email;
		$retorno['password'] = md5($opt->password);
		if($dbo->isExists('users', 'email',$retorno['email']))
		{
			if($dbo->isExists_multi('users', $retorno))
			{
				$_SESSION['token'] = $this->getToken('session_log','token');
				$aux['token'] = $_SESSION['token'];
				$aux['id_user'] = $dbo->reg_one("SELECT id_user FROM users WHERE email='".$opt->email."'");
				$aux['id_user'] = $aux['id_user'][0]; 
				$aux['date'] = date('', time());
				$aux['ip'] = $this->getIP();
				$dbo->insert('session_log', $aux);
				$this->returnData(array("status"=>0));
			}
			else
			{
				$this->returnData(array("status"=>1));
			}
		}
		else
		{
			$this->returnData(array("status"=>2));
		}
	}
	//METODO PARA DETERMINAR IP
	function getIP(){
	    if( isset( $_SERVER['HTTP_X_FORWARDED_FOR'] )) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if( isset( $_SERVER ['HTTP_VIA'] ))  $ip = $_SERVER['HTTP_VIA'];
	    else if( isset( $_SERVER ['REMOTE_ADDR'] ))  $ip = $_SERVER['REMOTE_ADDR'];
	    else $ip = null ;
	    return $ip;
	}
}
include("handler.php");
?>