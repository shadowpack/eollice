<?php
include("config.php");
class db_core
{
	function db_core()
	{
		global $db_user;
		global $db_pass;
		global $db_host;
		global $db_db;
		$this->user =  $db_user;
		$this->pass = $db_pass;
		$this->host = $db_host;
		$this->db 	= $db_db;
		$this->con = mysql_connect($this->host, $this->user, $this->pass);
		if(!$this->con)
		{
			die("Imposible ejecutar conexion con el servidor mysql, por favor revise los parametros de conexion");
		}
		else
		{
			$sele = mysql_select_db($this->db, $this->con);
			if(!$sele)
			{
				die("Imposible seleccionar la base de datos, revise su configuracion");
			}
		}
	}
	function query($consulta)
	{
		$action = mysql_query($consulta, $this->con);
		if(!$action)
		{
			die("Imposible ejecutar consulta : ".$consulta."<br>".mysql_error($this->con)." en la linea ".mysql_errno($this->con));
		}
		else
		{
			return $action;
		}
	}
	function reg_one($consulta)
	{
		$action = $this->query($consulta);
		if(!$action)
		{
			die("Imposible ejecutar consulta : ".$consulta);
		}
		else
		{
			$result = mysql_fetch_array($action, MYSQL_BOTH);
			return $result;
		}
	}
	
	function num_one($consulta)
	{
		$action = $this->query($consulta);
		if(!$action)
		{
			die("Imposible ejecutar consulta : ".$consulta);
		}
		else
		{
			$result = mysql_num_rows($action);
			return $result;
		}
	}
	function insert($table,$value){
		$cadena = "INSERT INTO ".$table." (";
		foreach($value as $key => $vector){
			$cadena .= "`".$key."`,";
		}
		$cadena = substr($cadena, 0, -1);
		$cadena .=") VALUES (";
		foreach($value as $key => $vector){
			$cadena .= "'".$vector."',";
		}
		$cadena = substr($cadena, 0, -1);
		$cadena .= ");";
		if($this->query($cadena))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function isExists($table,$campo,$value){
		$consulta = $this->query("SELECT * FROM ".$table." as t WHERE t.".$campo."='".$value."'");
		if(mysql_num_rows($consulta) > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function delete($table, $campo,$valor)
	{
		if($this->query("DELETE FROM ".$table." WHERE ".$campo."='".$valor."'"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>