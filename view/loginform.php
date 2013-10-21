<script src="controller/logForm.js"></script>
<div class="row">
	<div class="col-md-4 login">
		<div class="title-logform">Ingresa a Eollice</div>
		<div class="log-form">
			<form  role="form">
				<div class="message-logform">Digita tu usuario y contraseña</div>
					<div class="form-group input-group-400">
		  			<div class="input-group">
					    <span class="input-group-addon">@</span>
		 	 			<input type="text" class="form-control" placeholder="E-Mail" id="loginUser" style="height:45px;">
					</div>
				</div>
				<div class="form-group input-group-400">
					<div class="input-group">
					    <span class="input-group-addon">?</span>
		 	 			<input type="password" class="form-control" placeholder="Contraseña" id="loginPassword" style="height:45px;">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group btn-login">
					    <button type="button" class="btn btn-primary loginInactiveBtn" id="loginButton" data-loading-text="Verificando..."style="height:50px; width:280px;">Ingresar a tu Cuenta</button>
					</div>
				</div>
				<p class="text-primary "><a data-toggle="modal" href="#forgotPassword" style="color:#FFF;">¿Olvidaste tu contraseña?</a></p>
			
			</form>
		</div>
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