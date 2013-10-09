<script src="controller/logForm.js"></script>
<div class="title-logform">Ingresa a Eollice</div>
<div class="log-form">
	<form  role="form">
		<div class="message-logform">Verifica tu usuario y contraseña</div>
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