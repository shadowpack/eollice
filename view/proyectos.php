<script src="controller/proyectos.js"></script>
<link rel="stylesheet" href="css/proyectos.css">
<div class="container proyectos">
    <div class="proyectos_container">
    	<div class="proyectos_header">Proyectos de Inversión</div>
    	<div class="proyectos_body">
    		<?php
    			include_once('controller/proyectos.php');
    			proyectos::print_proyectos();
    		?>
    		
    	</div>
    </div>
</div>