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
	    		<div class="title-logform">Ingresa a Eollice</div>
	        	<div class="log-form">
	        		<form  role="form">
			  			<div class="form-group input-group-400">
				  			<div class="input-group">
							    <span class="input-group-addon">@</span>
				 	 			<input type="text" class="form-control" placeholder="E-Mail" style="height:45px;">
							</div>
						</div>
						<div class="form-group input-group-400">
							<div class="input-group">
							    <span class="input-group-addon">?</span>
				 	 			<input type="text" class="form-control" placeholder="Contraseña" style="height:45px;">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group btn-login">
							    <button type="button" class="btn btn-primary" style="height:50px; width:200px;">Ingresar a tu Cuenta</button>
							</div>
						</div>
						<p class="text-primary "><a data-toggle="modal" href="#forgotPassword" style="color:#FFF;">¿Olvidaste tu contraseña?</a></p>
			        	
			  		</form>
			  	</div>
	        </div>
	        <div class="col-md-1 logadd-div" style="padding:0px 0px 0px 0px;"><div class="logadd"></div></div>
	        <div class="col-md-7 proyecto" style="padding:0px 0px 0px 0px;">
	        	<div class="header-proyecto">Proyecto Solar de 20 kW para Metalmecánica, Copiapo</div>
	        	<div class="foto-Proyecto"><img src="images/images-proyectos/1.png" width="390"></div>
	        	<div class="info-Proyecto">
	        		<div class="info-inver-proyecto" id="cantidad">
	        			<div class="info-title-proyecto">Cantidad Invertida</div>
	        			<div class="info-content-proyecto">$ 1.200.000</div>
	        		</div>
	        		<div class="info-inver-proyecto" id="cantidad">
	        			<div class="info-title-proyecto">Tasa de Interes</div>
	        			<div class="info-content-proyecto">12%</div>
	        		</div>
	        		<div class="info-inver-proyecto" id="cantidad">
	        			<div class="info-title-proyecto">Inversionistas</div>
	        			<div class="info-content-proyecto">11</div>
	        		</div>
	        		<div class="info-inver-proyecto" id="cantidad">
						<div class="input-group">
						    <button type="button" class="btn btn-success btn-proyecto" style="height:45px;">Mas información del proyecto</button>
						</div>
					</div>
	        	</div>
	        </div>    
        </div>
        <div class="row botones-reg">
        	<div class="col-md-4">
        		<div class="input-group boton-reg-eollice">
				    <button type="button" class="btn btn-primary boton-eollice RegFormBtn"><text style="font-size:30px;">Registrate Ahora</text><br>Se parte de la comunidad Eollice</button>
				</div>
        	</div>
        	<div class="col-md-7 col-md-offset-1">
        		<div class="input-group boton-reg-eollice">
				    <button type="button" class="btn btn-primary boton-eollice"><text style="font-size:27px;">Conoce los proyectos de inversion</text></button>
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
      				<div class="botonDiv"><button type="button" class="btn btn-primary btn-ask" >¿Como Funciona Eollice?</button></div>
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
</body>
</html>