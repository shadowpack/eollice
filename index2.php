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
	<!-- Latest compiled and minified JavaScript -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" href="images/iconpage.ico" type="image/png">
</head>
<body>
	<!-- INCLUIMOS EL HEADER -->
	<?php require_once("view/header.php"); ?>
	<!-- ELEMENTOS DE BODY -->
	<div class="jumbotron" >
  		<div class="container">
        <img src="images/principal.png" />
  		</div>
  </div>
  	<div class="container">
  		<form class="form-inline" role="form">
  			<div class="form-group input-group-400">
	  			<div class="input-group">
				    <span class="input-group-addon">@</span>
	 	 			<input type="text" class="form-control" placeholder="Username">
				</div>
			</div>
			<div class="form-group input-group-400">
				<div class="input-group">
				    <span class="input-group-addon">?</span>
	 	 			<input type="text" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
				    <button type="button" class="btn btn-success">Ingresar</button>
				</div>
			</div>
  		</form>
  		<div class="row">
  			<div class="col-md-5"><p class="text-primary navbar-text"><a data-toggle="modal" href="#RegForm" >¿No tienes una cuenta?</a>&nbsp;&nbsp;&nbsp;<a data-toggle="modal" href="#forgotPassword" >¿Olvidaste tu contraseña?</a></p></div>
  		</div>
  	</div>
  	<div class="container">
  		<div class="row">
  			<div class="col-md-offset-12 esp20"></div>
  		</div>
  		<div class="row">
  			<div class="col-md-4">
  				<h3>Invierte</h3>
  				<p><br>Invierte de una forma rapida y sencilla en los proyectos de energia renovable que tu elijas.</p>
  				<p>Elige el que tenga las condiciones que mas te acomode.</p>
  				<p><br><a class="btn btn-default">Leer Mas >></a></p>
  			</div>
  			<div class="col-md-4">
  				<h3>Obten Rentabilidad</h3>
  				<p><br>Obten rentabilidad de tus inversiones y haz crecer tu capital.</p>
  				<p><br></p>
  				<p><br><a class="btn btn-default">Leer Mas >></a></p>
  			</div>
  			<div class="col-md-4">
  				<h3>Maneja tus Inversiones</h3>
  				<p><br>Visualiza tus inversiones y operaciones, en una plataforma facil e intuitiva.</p>
	  			<p><br></p>
	  			<p><br><a class="btn btn-default">Leer Mas >></a></p>
  			</div>
  		</div>
  	</div>
  	<!-- INCLUIMOS EL FOOTER -->
	<?php require_once("view/footer.php"); ?>
	<!-- INCLUIMOS LAS CAPAS MODALES -->
	<?php require_once("view/regForm.php"); ?>
	<?php require_once("view/forgotPassword.php"); ?>
</body>
</html>