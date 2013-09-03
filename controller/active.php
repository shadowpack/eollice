<?php
include('../model/users.php');
$user = new generic();
$opt = new stdClass();
$opt->token = $_GET['token'];
$user->activeUser($opt);
?>