<?php
    @include_once("model/db_core.php");
	class proyectos{
		static public function print_proyectos(){
			$db =  new db_core();
			$consulta[0] = $db->select("resumen","*");
			while($consulta[1] = mysql_fetch_array($consulta[0])){
				$inversion[0] = $db->reg_one("SELECT SUM(monto_inversion), COUNT(*) FROM inversion_proyecto AS p WHERE p.id_proyecto='".$consulta[1]['id_proyecto']."'");
				$porcentaje = number_format(((($inversion[0][0])/$consulta[1]['monto_total'])*100),0);
				echo '<div class="row proyectos_item">
	    			<div class="proyectos_photo">
	    				<img src="images/images-proyectos/1.png" width="235" height="165" />
	    			</div>
	    			<div class="proyecto_info">
	    				<div class="proyecto_title">'.$consulta[1]['titulo'].'</div>
	    				<div class="proyecto_tasa">Tasa de Interes : '.$consulta[1]['tasa_interes_anual'].'</div>
	    				<div class="proyecto_plazo">Plazo : '.$consulta[1]['plazo'].' Meses</div>
	    				<div class="proyecto_monto">Monto : $'.number_format($consulta[1]['monto_total'],0,",",".").'</div>
	    				<div class="proyecto_inversionistas">Inversionistas : '.$inversion[0][1].'</div>
	    				<div class="proyecto_bar">
	    					Financiado al '.$porcentaje.'%
	    					<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="'.$porcentaje.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$porcentaje.'%;">
							    <span class="sr-only">'.$porcentaje.'% Financiado</span>
							  </div>
							</div>
	    				</div>
	    			</div>
	    			<div class="proyecto_invetir">
	    				<button type="button" class="btn btn-primary btn-invertir proyecto_btn" proyecto="'.$consulta[1]['id_proyecto'].'"><text style="font-size:25px;">Invierte</text></button>
	    			</div>
	    		</div>';
			}
		}
		static public function get_info($id){
			//FUNCION DE SEGURIDAD
			if(!is_numeric($id)){
				die('ERROR DE SEGURIDAD');
			}
			//HACEMOS LA CADENA SEGURA
			$id = mysql_real_escape_string($id);
			$db =  new db_core();
			$retorno['proyecto'] = $db->reg_one("SELECT * FROM proyecto INNER JOIN resumen ON proyecto.id_proyecto = resumen.id_proyecto INNER JOIN imagenes_proyectos ON imagenes_proyectos.id_proyecto = proyecto.id_proyecto WHERE proyecto.id_proyecto='".$id."'");
			$retorno['ejecutor'] = $db->reg_one("SELECT * FROM compania_ejecutor AS c WHERE c.id_compania=(SELECT id_compania FROM proyecto as p WHERE p.id_proyecto='".$id."')");
			$retorno['usuario'] = $db->reg_one("SELECT * FROM datos_usuario AS c WHERE c.id_usuario=(SELECT id_usuario FROM proyecto as p WHERE p.id_proyecto='".$id."')");
			$retorno['inversion'] = $db->reg_one("SELECT SUM(monto_inversion), COUNT(*) FROM inversion_proyecto AS p WHERE p.id_proyecto='".$id."'");
			$retorno['inversion']['porcentaje'] = number_format((($retorno['inversion'][1]/$retorno['proyecto']['monto_total'])*100),0);
			return $retorno;
		}
	}
?>