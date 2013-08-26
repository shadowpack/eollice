<?php
require_once('db_core.php');
class users
{
	var $db;
	function users(){
		$this->db = new db_core(); 
	}
	function regUser($opt){
		
	}
	function passwordForget($opt){

	}
}
include("handler.php");
?>