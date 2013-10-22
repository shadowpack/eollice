<script src="controller/proyecto.js"></script>
<link rel="stylesheet" href="css/proyecto.css">
<?php
	@include_once("controller/proyectos.php");
	$datos = proyectos::get_info($_GET['id']);
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=479830965428140";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container proyect">
    <div class="proyect_container">
    	<div class="proyect_header">
    		<div class="title_header"><?php echo $datos['proyecto']['titulo']; ?></div>
    		<div class="btn_proyecto_header"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Volver Proyectos</div>
    	</div>
    	<div class="proyect_body">
    		<div class="proyect_data">
    			<div class="proyect_data_datos">
    				<div class="proyect_data_photo">
    					<div class="proyect_data_photo_img"><img src="<?php echo $datos['proyecto']['source']; ?>" height="185" width="255" /></div>
    					<div class="proyect_id">ID Proyecto : <?php echo $datos['proyecto']['id_proyecto']; ?></div>
    					<div class="proyect_facebook"><div class="fb-like" data-href="http://www.eollice.com/eollice/proyecto.php?id=1" data-width="270" data-height="40" data-colorscheme="light" data-layout="standard" data-action="recommend" data-show-faces="true" data-send="false"></div></div>
    					<div class="proyect_twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="AngeloCalvoAlfa" data-lang="es" data-size="large" data-related="eollice">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
    				</div>
    				<div class="proyect_data_info">
    					<div class="proyect_data_info_des"><?php echo $datos['proyecto']['breve_descripcion']; ?></div>
    					<div class="proyect_data_indicadores">
    						<div class="proyect_data_indicador">
    							<div class="proyect_data_indicador_value"><?php echo $datos['proyecto']['tasa_interes_anual']; ?>%</div>
    							<div class="proyect_data_tooltip glyphicon glyphicon-question-sign"></div>
    							<div class="proyect_data_indicador_title">Tasa de Interes</div>
    						</div>
    						<div class="proyect_data_indicador">
    							<div class="proyect_data_indicador_value"><?php echo $datos['proyecto']['plazo']; ?></div>
    							<div class="proyect_data_tooltip glyphicon glyphicon-question-sign"></div>
    							<div class="proyect_data_indicador_title">Meses de Plazo</div>
    						</div>
    						<div class="proyect_data_indicador" style="border-right:0px;">
    							<div class="proyect_data_indicador_value"><?php echo number_format($datos['proyecto']['monto_total'],0,",","."); ?></div>
    							<div class="proyect_data_indicador_title">Monto Total</div>
    						</div>
    					</div>
    					<div class="bar_proyecto">
    						<div class="progress" style="height:15px;">
							  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $datos['inversion']['porcentaje']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $datos['inversion']['porcentaje']; ?>%;">
							    <span class="sr-only">'.$porcentaje.'% Financiado</span>
							  </div>
							</div>
    					</div>
    					<div class="proyect_info_bar">
    						<div class="proyect_data_info_bar">
    							<div class="proyect_data_info_bar_value"><?php echo $datos['inversion']['porcentaje']; ?>%</div>
    							<div class="proyect_data_info_bar_title">Financiado</div>
    						</div>
    						<div class="proyect_data_info_bar">
    							<div class="proyect_data_info_bar_value"><?php echo $datos['proyecto']['tir']; ?>% <span class="proyect_data_tooltip_bar glyphicon glyphicon-question-sign"></span></div>
    							<div class="proyect_data_info_bar_title">TIR</div>
    						</div>
    						<div class="proyect_data_info_bar">
    							<div class="proyect_data_info_bar_value"><?php echo $datos['inversion'][1]; ?></div>
    							<div class="proyect_data_info_bar_title">Inversionistas</div>
    						</div>
    						<div class="proyect_data_info_bar">
    							<div class="proyect_data_info_bar_value">$<?php echo number_format($datos['inversion'][0],0,",","."); ?></div>
    							<div class="proyect_data_info_bar_title">Financiado</div>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="proyect_informacion">
    				<div class="proyect_informacion_tabs">
    					<div class="proyect_informacion_tabs_item2 proyect_informacion_border" id="proyecto_info_id" target="proyecto_info">El Proyecto</div>
    					<div class="proyect_informacion_tabs_item proyect_informacion_border_r" id="usuario_info_id" target="usuario_info">El Usuario del Proyecto</div>
    					<div class="proyect_informacion_tabs_item proyect_informacion_border_r" id="empresa_info_id" target="ejecutor_info">La Empresa Ejecutora</div>
    					<!-- <div class="proyect_informacion_tabs_item2 proyect_informacion_border_r" id="pagos_info_id" target="pagos_info">Pagos</div> -->
    				</div>
    				<div class="proyect_informacion_contenido">
    					<div class="proyecto_info">
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['tecnologia'];?></div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Tamaño (kW): </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['tamano'];?></div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>	    					
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Energía anual Estimada: </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['energia_anual'];?></div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>	 
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Toneladas Anuales de CO2 Evitadas: </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['toneladas_co2'];?></div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>	
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Marca del Equipo: </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['marca_equipo'];?></div>	
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Garantías de los Equipos (años): </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['garantia_equipo'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Marca del Inversor: </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['marca_inversor'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_2" style="border-bottom:none;">
	    						<div class="info_item_title">Garantías del inversor (años): </div>
	    						<div class="info_item_content"><?php echo $datos['proyecto']['garantia_inversor'];?></div>
	    					</div>
	    				</div>
	    				<div class="usuario_info">
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Nombre: </div>
	    						<div class="info_item_content"><?php echo $datos['usuario']['nombre'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Ubicacion: </div>
	    						<div class="info_item_content"><?php echo $datos['usuario']['ubicacion'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_1" style="border-bottom:none;">
	    						<div class="info_item_title">Tipo de Usuario: </div>
	    						<div class="info_item_content">
	    							<?php 
	    								if($datos['usuario']['tipo de usuario'] == 0){
	    									echo "Autoconsumo";
	    								}
	    								elseif($datos['usuario']['tipo de usuario'] == 1){
	    									echo "PMGD";
	    								}
	    								elseif($datos['usuario']['tipo de usuario'] == 2){
	    									echo "Comunidad Aislada";
	    								}
	    							?>
	    						</div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>	
	    					</div>
	    				</div>
	    				<div class="ejecutor_info">
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Nombre: </div>
	    						<div class="info_item_content"><?php echo $datos['ejecutor']['nombre'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Proyectos Realizados: </div>
	    						<div class="info_item_content"><?php echo $datos['ejecutor']['proyectos_realizados'];?></div>
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Potencia Instalada a la Fecha (kW): </div>
	    						<div class="info_item_content"><?php echo $datos['ejecutor']['potencia_instalada'];?></div>
	    						<div class="info_item_tooltip"><span class="glyphicon glyphicon-question-sign"></span></div>	
	    					</div>
	    					<div class="proyect_informacion_item_2" style="border-bottom:none;">
	    						<div class="info_item_title">Página web: </div>
	    						<div class="info_item_content"><?php echo $datos['ejecutor']['pagina_web'];?></div>
	    					</div>
	    					
	    				</div>
	    				<!-- <div class="pagos_info">
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_2">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_1">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    					<div class="proyect_informacion_item_2" style="border-bottom:none;">
	    						<div class="info_item_title">Tecnologia: </div>
	    						<div class="info_item_content"></div>
	    					</div>
	    				</div> -->
    				</div>
    			</div>
    		</div>
    		<div class="proyect_invertir">
    			<div class="costo_por_uso">
    				<div class="title_costo">Costo por opción de Inversion&nbsp;&nbsp;<span class="generic_tooltip glyphicon glyphicon-question-sign"></span></div>
    				<div class="content_costo">$500</div>
    				<div class="bajada_costo">Por cada $50.000 de inversion</div>
    				<div class="content_btn">
    					<button type="button" class="btn btn-primary btn_invertir" id="simulate-btn" data-toggle="modal" href="#simulation-modal">Conoce los detalles<br> para Invertir</button>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>