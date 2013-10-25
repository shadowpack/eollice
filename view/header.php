<link rel="stylesheet" href="css/header.css">
<script src="controller/header.js"></script>
<div class="navbar navbar-inverse navbar-fixed-top eollice-header" role="navigation" style="background:38A3E4;">
	<div class="container">	
		<a class="navbar-brand" href="http://www.eollice.com"><img src="images/logo-blanco.png" height="20" /></a>
		<div class="navbar-collapse collapse">
	        <ul class="nav navbar-nav eollice-text">
	            <li><a class="eollice-text inactive-account-btn" href="#">Cómo funciona</a></li>
	            <li><a class="eollice-text" href="proyectos.php">Proyectos</a></li>
	            <li><a class="eollice-text inactive-account-btn" href="#contact">Quienes Somos</a></li>
	            <li><a class="eollice-text inactive-account-btn" href="#contact">Preguntas Frecuentes</a></li>
	        </ul>
	        <?php 
	        session_start();
		      if(isset($_SESSION['token'])){
		        $db = new db_core();
		        if($db->isExists('session_log', 'token', $_SESSION['token'])){
		          include_once('view/headerUser.php'); 
		        }
		        else
		        {
		          include_once('view/headerNoUser.php'); 
		        }
		      }
		      else
		      {
		        include_once('view/headerNoUser.php'); 
		      }
		    ?>
		</div>
	</div>
</div>