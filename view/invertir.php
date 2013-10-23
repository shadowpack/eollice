<script src="controller/invertir.js"></script>
<link rel="stylesheet" href="css/invertir.css">
<?php
	@include_once("controller/proyectos.php");
	$proyect = proyectos::get_info(proyectos::get_proyecto($_GET['id_inv']));
	$inversion = proyectos::get_data_inv($_GET['id_inv']);
?>
<div class="container invertir">
	<div class="invertir-container">
		<div class="invertir-header">
			<div class="invertir-header-title">Invertir</div>
			<div class="invertir-header-btn"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;&nbsp;Volver a Proyecto</div>
		</div>
		<div class="invertir-body">
			<div class="invertir-body-leftlayer">
				<div class="invertir-body-rightlayer-title">Tu Inversión</div>
				<div class="invertir-body-leftlayer-datatitle">
					Monto a Invertir:<br>
					Tasa de Interes:<br>
					TIR:<br>
					COI:&nbsp;&nbsp;<span class="glyphicon glyphicon-question-sign"></span><br>
					Utilidades:
				</div>
				<div class="invertir-body-leftlayer-data">
					<span id="invertir_monto">$ <?php echo number_format($inversion['monto_inversion'],0,",","."); ?></span><br>
					<span id="invertir_tasa"><?php echo $proyect['proyecto']['tasa_interes_anual']; ?> %</span><br>
					<span id="invertir_tir"><?php echo $proyect['proyecto']['tir']; ?> %</span><br>
					<span id="invertir_coi">$ <?php echo number_format($inversion['coi'],0,",","."); ?></span><br>
					<span id="invertir_utilidades">$ <?php echo number_format($inversion['utilidad'],0,",","."); ?></span><br>
				</div>
				<div class="invertir-body-leftlayer-btn">
					<button type="button" class="btn btn-default blank_button" id="modificar_inversion"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Modificar</button>
				</div>
			</div>
			<div class="invertir-body-rightlayer">
				<div class="invertir-body-rightlayer-title"><?php echo $proyect['proyecto']['titulo']; ?></div>
				<div class="invertir-body-rightlayer-photo"><img src="<?php echo $proyect['proyecto']['source']; ?>" height="185" width="225"/></div>
				<div class="invertir-body-rightlayer-datatitle">
					ID Proyecto:<br>
					Tasa de Interes:<br>
					Meses de Plazo:<br>
					Monto Total:<br>
					Garantía:<br>
				</div>
				<div class="invertir-body-rightlayer-data">
					<?php echo $proyect['proyecto']['id_proyecto']; ?><br>
					<?php echo $proyect['proyecto']['tasa_interes_anual']; ?>%<br>
					<?php echo $proyect['proyecto']['plazo']; ?> Meses<br>
					$<?php echo number_format($proyect['proyecto']['monto_total'],0,",","."); ?><br>
					<?php echo $proyect['proyecto']['garantia_inversion']; ?> %<br>
				</div>
			</div>
		</div>
	</div>
	<div class="cuentas-container">
		<div class="cuentas-header">
			<div class="cuentas-header-title">Selecciona con qué cuenta quieres invertir</div>
			<div class="cuenta-btn" id="agregar_banco"><button type="button" class="btn btn-default blank_button" id="agregar_banco"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;&nbsp;Agregar Cuenta Bancaria</button></div>
		</div>
		<div class="cuentas-body">
			<div class="cuentas_list">
			<?php
				$cuentas = proyectos::get_cuentas();
				
				foreach ($cuentas as $key => $value) {
					$checked = ($inversion['id_cuenta_bancaria'] == $value['id_cuenta'])?"checked":"";
					echo '<div class="cuenta_bank">
							<div class="cuentas-checkbox">
								<div class="checkbox">
								    <label>
								      <input type="radio" name="cuentas_reg" class="select_cuenta" cuenta="'.$value['id_cuenta'].'" '.$checked.'/>
								    </label>
							  	</div>
			  				</div>
							<div class="cuentas-Titulos">
								<div class="cuentas-tipoCuenta">Cuenta Personal</div>
								<div class="cuentas-nInversiones">Numero de Inversiones: <span id="data_inver_'.$value['id_cuenta'].'">'.$value['cantidad'].'</span></div>
								<div class="cuentas-descripcion" id="data_cuenta_'.$value['id_cuenta'].'"><span class="item_tipo_value_'.$value['id_cuenta'].'">'.$value['tipo_de_cuenta'].'</span>: <span class="item_ncuenta_value_'.$value['id_cuenta'].'">'.$value['numero_cuenta_banco'].'</span>; <span class="item_banco_value_'.$value['id_cuenta'].'">'.$value['banco'].'</span></div>
							</div>
							<div class="cuentas-button">
								<button type="button" class="btn btn-default mod-cuenta blank_button" cuenta="'.$value['id_cuenta'].'"><span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;Modificar Cuenta Bancaria</button>
							</div>
						</div>';
				}
			?>
			</div>
		</div>
	</div>
	<div class="pago-container">
		<div class="pago-container-header">
			<div class="pago-header-title">Paga con Transferencia Electronica</div>
		</div>
		<div class="pago-container-body">
			<div class="pago-message">Serás considerado en el proceso de inversión una vez que tu pago del Costo de Uso de Plataforma sea aprobado.</div>
			<div class="pago-transferencia"><div class="textfloat">Transfiere </div><div class="pago-coi" id="coi_final">$<?php echo number_format($inversion['coi'],0,",","."); ?></div><div class="textfloat"> a la siguiente cuenta.</div></div>
			<div class="pago-cuenta">
				<b>Datos de la Cuenta Eollice</b><br>
				<b>N° de Cuenta:</b> 00-789-123-9<br>
				<b>Banco:</b> Banco de Credito e Inversiones<br>
				<b>Rut:</b> 76.998.987-7<br>
				<b>Tipo de Cuenta:</b> Cuenta Corriente<br>
				<b>Razón Social:</b> Eollice SpA.<br>
				<b>E-Mail:</b> transferencias@eollice.com
			</div>
			<div class="pago-envio"><div class="textfloat">Reenvía el correo de confirmación de transferencia a transferencias@eollice con este código en el asunto:</div><div class="pago-codigo"><?php echo $inversion['token_transaccion']; ?></div></div>
			<div class="pago-instrucciones">Una vez que hallas hecho los pasos anteriores, aprieta el boton confirmar transferencia.</div>
			<div class="pago-accion-confirmar">
				<button type="button" class="btn btn-info btn-lg btn-finals" id="send_mail"><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;Enviar Indicaciones a mi E-Mail</button>
				<button type="button" class="btn btn-primary btn-lg btn-finals" id="confirm_founding"><span class="glyphicon glyphicon-ok-circle"></span>&nbsp;&nbsp;Confirmar Inversion</button>
			</div>
		</div>
	</div>
</div>