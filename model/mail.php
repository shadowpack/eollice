<?php
class mail{
	function mail(){

	}
	function sendRegMail($email, $token){
		$para      = $email;
		$asunto    = 'Registro en Eollice - Activacion de Cuenta';
		$mensaje   = '<html>
		<body>
			<div id="container" style="padding:10px 0px 10px 0px; background:#329BD8; height:490px; width:660px; left:50%; margin-left:-330px; ">
				<img src="http://www.eollice.com/images/blue_white_logo.png" height="90" />
				<div id="containerbody" style="background:white; height:310px; padding:10px 20px 10px 20px; font-family:Helvetica; font-size:14px;">
					<div style="position:relative; height:35px; font-size:16px;">Hola,</div>
					<div style="position:relative; color:#3ca9ec; height:45px; font-size:24px;">¡Bienvenido a la comunidad Eollice!</div>
					<div style="position:relative;">Ya perteneces a la primera red de financiamiento colectivo para proyectos de energías renovables en Latinoamérica. Valida tu registro para finalizar el proceso.</div>
					<div style="position:relative; height:50px; padding-top:20px; padding-bottom:20px;">
						<div id="boton" style="border: 1px #3ca9ec solid; border-radius:5px; background:#3ca9ec; color:white; height:40px; line-height:40px; vertical-align:middle; width:200px; text-align:center;"><a style="color:#FFF;" href="http://www.eollice.com/controller/active.php?token='.$token.'">Confirma tu registro >></a></div>
					</div>
					<div style="height:100px; background:#EEE; font-family:Helvetica;">
						<div style="float:left; width:60px; padding: 35px 0px 0px 20px; font-size:12px; height:20px; line-height:20px; vertical-align:middle;"><a href="http://www.facebook.com/eollice"><img src="http://www.eollice.com/images/facebook.png" height="30" /></a><a href="http://www.facebook.com/eollice"><img src="http://www.eollice.com/images/twitter.png" height="30" /></a></div>
						<div style="float:left; width:50px; padding: 35px 20px 0px 5px; font-size:13px; height:30px; line-height:30px; vertical-align:middle;">Siguenos</div>
						<div style="float:right; width:250px; padding: 35px 20px 0px 0px; font-size:12px;">Si tienes alguna duda responde este correo o escríbenos a: <span style="color:#3ca9ec;">contacto@eollice.com</span></div>
					</div>
				</div>
				<div link="#FFF" vlink="#FFF" alink="#FFF" style="position:relative; font-family:Helvetica; text-align:center; color:#FFF; height:30px; line-height:30px; vertical-align:middle; padding:15px 0px 0px 0px;"><a href="#" style="color:#FFF;">Terminos y Condiciones</a>&nbsp;&nbsp;<a href="#" style="color:#FFF;">Privacidad</a></div>
			</div>
		</body>
		</html>';
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'From: contacto@eollice.com' . "\r\n";
		if(mail($para, $asunto, $mensaje, $cabeceras))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function sendForgotMail($email, $token){
		$para      = $email;
		$asunto    = 'Ingresar a Eollice - Recuperar Contraseña';
		$mensaje   = '<html>
		<body>
			<div id="container" style="padding:10px 0px 10px 0px; background:#329BD8; height:490px; width:660px; left:50%; margin-left:-330px; ">
				<img src="http://www.eollice.com/images/blue_white_logo.png" height="90" />
				<div id="containerbody" style="background:white; height:310px; padding:10px 20px 10px 20px; font-family:Helvetica; font-size:14px;">
					<div style="position:relative; height:35px; font-size:16px;">Hola,</div>
					<div style="position:relative; color:#3ca9ec; height:45px; font-size:24px;">Recupera tu contraseña</div>
					<div style="position:relative;">Para este fin, haz click en el enlace a continuacion para de esta forma redefinir tu contraseña.</div>
					<div style="position:relative; height:50px; padding-top:20px; padding-bottom:20px;">
						<div id="boton" style="border: 1px #3ca9ec solid; border-radius:5px; background:#3ca9ec; color:white; height:40px; line-height:40px; vertical-align:middle; width:200px; text-align:center;"><a style="color:#FFF;" href="http://www.eollice.com/index.php?recoverToken='.$token.'">Recupera tu Contraseña >></a></div>
					</div>
					<div style="height:100px; background:#EEE; font-family:Helvetica;">
						<div style="float:left; width:60px; padding: 35px 0px 0px 20px; font-size:12px; height:20px; line-height:20px; vertical-align:middle;"><a href="http://www.facebook.com/eollice"><img src="http://www.eollice.com/images/facebook.png" height="30" /></a><a href="http://www.facebook.com/eollice"><img src="http://www.eollice.com/images/twitter.png" height="30" /></a></div>
						<div style="float:left; width:50px; padding: 35px 20px 0px 5px; font-size:13px; height:30px; line-height:30px; vertical-align:middle;">Siguenos</div>
						<div style="float:right; width:250px; padding: 35px 20px 0px 0px; font-size:12px;">Si tienes alguna duda responde este correo o escríbenos a: <span style="color:#3ca9ec;">contacto@eollice.com</span></div>
					</div>
				</div>
				<div link="#FFF" vlink="#FFF" alink="#FFF" style="position:relative; font-family:Helvetica; text-align:center; color:#FFF; height:30px; line-height:30px; vertical-align:middle; padding:15px 0px 0px 0px;"><a href="#" style="color:#FFF;">Terminos y Condiciones</a>&nbsp;&nbsp;<a href="#" style="color:#FFF;">Privacidad</a></div>
			</div>
		</body>
		</html>';
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$cabeceras .= 'From: contacto@eollice.com' . "\r\n";
		if(mail($para, $asunto, $mensaje, $cabeceras))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>