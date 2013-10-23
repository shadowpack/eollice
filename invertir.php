<?php
  session_start();
  require_once('model/db_core.php');
?>
<!-- DECLARAMOS QUE CONSISTE EN UN DOCUMENTO HTML5 -->
<!DOCTYPE html>
<html>
<head>
  <title>Eollice - Plataforma de Inversion</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
  <!-- CSS DEL DOCUMENTO -->
  <link rel="stylesheet" href="css/esential.css">
  <link rel="stylesheet" href="css/forms.css">
  <link rel="stylesheet" href="css/index.css">
  <!-- Latest compiled and minified JavaScript -->
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="images/iconpage.ico" type="image/png">

</head>
<body>
  <!-- INCLUIMOS EL HEADER -->
  <?php require_once("view/header.php"); ?>
  <!-- ELEMENTOS DE BODY -->
  <?php require_once("view/invertir.php"); ?>
  <!-- INCLUIMOS EL FOOTER -->
  <?php require_once("view/footer.php"); ?>
  <!-- INCLUIMOS LAS CAPAS MODALES -->
  <?php require_once("view/regForm.php"); ?>
  <?php require_once("view/forgotPassword.php"); ?>
  <?php require_once("view/activeForm.php"); ?>
  <?php require_once("view/definePassword.php"); ?>
  <?php require_once("view/uservoice.php"); ?>
  <?php require_once("view/user_terms.php"); ?>
  <?php require_once("view/add_banco.php"); ?>
  <?php require_once("view/simulation.php"); ?>
  <?php require_once("view/confirm-modal.php"); ?>
</body>
</html>