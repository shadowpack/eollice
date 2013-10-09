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
	</div>
	<div class="container">
	    <div class="row">
	    	<div class="col-md-4 login">
	    		<?php include_once('view/loginform.php'); ?>
	        </div>
	        <div class="col-md-1 logadd-div" style="padding:0px 0px 0px 0px;"><div class="logadd"></div></div>
	        <div class="col-md-7 proyecto" style="padding:0px 0px 0px 0px;">
	        	<?php include_once('view/proyecto_destacado.php'); ?>
	        </div>    
        </div>
        <div class="row botones-reg">
        	<div class="col-md-5">
        		<div class="input-group boton-reg-eollice">
				    <button type="button" class="btn btn-primary boton-eollice RegFormBtn"><text style="font-size:30px;">Registrate Ahora</text><br>Se parte de la comunidad Eollice</button>
				</div>
        	</div>
        	<div class="col-md-7">
        		<div class="input-group boton-reg-eollice">
				    <button type="button" class="btn btn-primary boton-eollice"><text style="font-size:27px;">Conoce los proyectos de inversión</text></button>
				</div>
        	</div>
        </div>
        <div class="row">
      		<div class="col-md-12 esp40"></div>
    	</div>
    	<div class="row">
      		<div class="col-md-4 no-padding">
      			<div class="headerAsk">¿Necesitas un crédito para tu<br>proyecto ERNC?</div>
      			<div class="headerContent">
      				<div class="foto"><img src="images/why1.png" height="200" /></div>
      				<div class="botonDiv"><button type="button" class="btn btn-primary btn-ask" >Aprende Más</button></div>
      			</div>
      		</div>
      		<div class="col-md-4 no-padding">
      			<div class="headerAsk">Cómo funciona Eollice</div>
      			<div class="headerContent">
      				<div class="foto"><img src="images/why2.png" height="200" /></div>
      				<div class="botonDiv"><button type="button" class="btn btn-primary btn-ask" >¿Cómo Funciona Eollice?</button></div>
      			</div>
      		</div>
      		<div class="col-md-4 no-padding">
      			<div class="headerAsk">¿Por qué invertir?</div>
      			<div class="headerContent">
      				<div class="foto"><img src="images/why3.png" height="200" /></div>
      				<div class="botonDiv"><button type="button" class="btn btn-primary btn-ask" >Aprende Más</button></div>
      			</div>
      		</div>
    	</div>
    	<div class="row">
      		<div class="col-md-12 esp80"></div>
    	</div>
    </div>
  <!-- INCLUIMOS EL FOOTER -->
	<?php require_once("view/footer.php"); ?>
	<!-- INCLUIMOS LAS CAPAS MODALES -->
	<?php require_once("view/regForm.php"); ?>
	<?php require_once("view/forgotPassword.php"); ?>
  <?php require_once("view/activeForm.php"); ?>
  <?php require_once("view/definePassword.php"); ?>
  <?php require_once("view/uservoice.php"); ?>
  <?php require_once("view/user_terms.php"); ?>
</body>
</html>