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
	<div class="jumbotron jumboClass">
  		<div class="container">
  			<h1>Bienvenido a Eollice</h1>
  			<p>Eollice conecta a personas para financiar colectivamente proyectos de energías renovables
    		<p><br><a class="btn btn-primary btn-lg">Leer Mas</a></p>
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
  			<div class="col-md-offset-12 esp40"></div>
  		</div>
  		<div class="row">
        <div class="col-md-3"><img src="images/como-funciona.png" /></div>
  			<div class="col-md-9">
  				<h3>Cómo funciona</h3>
  				<p><br>Tú puedes invertir en un proyecto de alto impacto de generación eléctrica con energías renovables como solar fotovoltaica, eólica, mini-hidro, o de otra tecnología.</p>
  				<p>Realiza, a través de Eollice, una inversión a uno o más proyectos que tú quieras de los que estén publicados en nuestra plataforma.</p>
  				<p></p>
          <p><br><a class="btn btn-default">Leer Mas >></a></p>
  			</div>
      </div>
      <div class="row">
        <div class="col-md-offset-12 esp40"></div>
      </div>
      <div class="row">
        <div class="col-md-3"><img src="images/noconstru.png" /></div>
  			<div class="col-md-9">
  				<h3>Proyectos ya aprobados ambientalmente nunca se construirán</h3>
  				<p><br>Actualmente el acceso a crédito sigue siendo una de las principales piedras de tope para el desarrollo de las ERNC en Chile, cuyos proyectos con aprobación ambiental suman 6.700 MW según el Centro de Energías Renovables (CER) del Ministerio de Energía.</p>
	  			
	  			<p><br><br><a class="btn btn-default">Leer Mas >></a></p>
  			</div>
      </div>
      <div class="row">
        <div class="col-md-offset-12 esp40"></div>
      </div>
      <div class="row">
        <div class="col-md-3"><img src="images/invertir.png" /></div>
          <div class="col-md-9">
          
            <h3>Por qué invertir</h3>
            <p><br>Todos queremos ser parte de un Chile más limpio con energías renovables, pero se hace difícil la tarea de cuidar al medio ambiente cuando deseamos colocar energías renovables en nuestra casa por la alta inversión de dinero debemos realizar.La reducción de gases de efecto invernadero (CO2 por ejemplo) y lo inagotable de sus fuentes principales de energía (viento, sol, entre otros) hacen que las energías renovables ayuden a cuidar el medio ambiente sin dejar de aportar energía eléctrica al sistema y a nuestros hogares.<br></p>
          
            <p><br><a class="btn btn-default">Leer Mas >></a></p>
          </div>
    		</div>
  	 </div>
     <div class="row">
        <div class="col-md-offset-12 esp40"></div>
      </div>
  	<!-- INCLUIMOS EL FOOTER -->
	<?php require_once("view/footer.php"); ?>
	<!-- INCLUIMOS LAS CAPAS MODALES -->
	<?php require_once("view/regForm.php"); ?>
	<?php require_once("view/forgotPassword.php"); ?>
  <?php require_once("view/activeForm.php"); ?>
  <?php require_once("view/definePassword.php"); ?>
  <?php require_once("view/uservoice.php"); ?>
</body>
</html>