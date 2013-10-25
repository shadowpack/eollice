<?php
session_start();
print_r($_SESSION);
echo "<pre>";
unset($_SESSION['token']);
$_SESSION['token'] = NULL;
print_r($_SESSION);
?>