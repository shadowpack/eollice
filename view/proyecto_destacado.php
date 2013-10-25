<?php 
	@include_once("controller/proyectos.php");
	$proyecto = proyectos::get_last_proyect();
?>
<script src="controller/proyecto_dest.js"></script>
<div class="header-proyecto"><?php echo $proyecto['proyecto']['titulo']; ?></div>
<div class="foto-Proyecto"><img src="<?php echo $proyecto['proyecto']['source']; ?>" width="390" height="305"></div>
<div class="info-Proyecto">
	<div class="info-inver-proyecto" id="cantidad">
		<div class="info-title-proyecto">Cantidad Invertida</div>
		<div class="info-content-proyecto">$<?php echo number_format($proyecto['inversion'][0],0,",","."); ?></div>
	</div>
	<div class="info-inver-proyecto" id="cantidad">
		<div class="info-title-proyecto">Tasa de Interes</div>
		<div class="info-content-proyecto"><?php echo $proyecto['proyecto']['tasa_interes_anual']; ?>%</div>
	</div>
	<div class="info-inver-proyecto" id="cantidad">
		<div class="info-title-proyecto">Inversionistas</div>
		<div class="info-content-proyecto"><?php echo $proyecto['inversion'][1]; ?></div>
	</div>
	<div class="info-inver-proyecto" id="cantidad">
		<div class="input-group">
		    <button type="button" class="btn btn-success btn-proyecto btn-info-proyect" style="height:45px;" cuenta="<?php echo $proyecto['proyecto']['id_proyecto']; ?>">Más información del proyecto</button>
		</div>
	</div>
</div>