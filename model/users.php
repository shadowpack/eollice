<?php
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
		$dbo = $this->db;

	}
}
include("handler.php");
?>