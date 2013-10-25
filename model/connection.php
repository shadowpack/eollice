<?php
	@session_start();
    @include_once("db_core.php");
	if(isset($_SESSION['token'])){
		$db = new db_core();
		if($db->isExists('session_log', 'token', $_SESSION['token'])){
			
		}
		else
		{
			header("location:index.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>