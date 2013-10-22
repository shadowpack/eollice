<?php
	@include_once('db_core.php');
	@include_once('../controller/proyectos.php');
	if(!is_numeric($_POST['id']))
	{
		$_POST['id'] = substr($_POST['id'], 0, strpos($_POST['id'],"#"));
	}
	echo json_encode(proyectos::get_info($_POST['id']));
?>