<?php
  @include_once("controller/proyectos.php");
  $simu = proyectos::get_info($_GET['id']);
?>
<script src="controller/simulation.js"></script>
<link rel="stylesheet" href="css/simulation.css">
<!-- Modal -->
<div class="modal fade" id="simulation-modal" tabindex="-1" role="dialog" aria-labelledby="simulation-modal" aria-hidden="true">
  <div class="modal-dialog simulation-box">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Detalles de la simulación</h4>
      </div>
      <div class="modal-body simulation-detail">
        <div class="simulation-body">
            <div class="simulation_monto">
              <div class="input_title">Monto a invertir*<br>(Minimo $100.000)</div>
              <div class="input_monto">
                <div class="input_monto_number">$ 100.000</div>
                <div class="input_monto_btn">
                  <div class="input_monto_plus">+</div>
                  <div class="input_monto_less">-</div>
                </div>
              </div>
              <div class="especificacion_monto">*El monto debe ser en multiplos de $50.000</div>
            </div>
            <div class="simulation_tasa">
              <div class="infos_title" id="tasa_value">Tasa de Interes: </div>
              <div class="infos_content"><?php echo $simu['proyecto']['tasa_interes_anual']; ?> %</div>
            </div>
            <div class="simulation_tir">
              <div class="infos_title">TIR: </div>
              <div class="infos_content"><?php echo $simu['proyecto']['tir']; ?> %</div>
            </div>
            <div class="simulation_costo_uso">
              <div class="simulation_costo_uso_title">
                <div class="simulation_costo_title">Costo por Opción de Inversión&nbsp;&nbsp;<span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Es el cobro que hace Eollice al inversionista por acceder a invertir en este proyecto."></span></div>
                <div class="simulation_costo_content" id="costo_opcion_inversion_1">">$4.000</div>
              </div>
              <div class="simulation_costo_uso_btn"><button type="button" class="btn btn-primary simulation_btn_invertir" id="simulation_btn_invertir">Invierte</button></div>
              <div class="simulation_costo_uso_bajada">Recuerda que el Costo de Opcion a Inversión debe ser pagado previo a la transferencia de dinero que deseas invertir.</div>
            </div>
            <div class="costos_inversion">
              <div class="costos_inversion_title">Costos de la Inversión: </div>
              <div class="costos_inversion_table">
                <div class="inversion_item_2">
                    <div class="inversion_item_title">Costo por Opción de Inversión: </div>
                    <div class="inversion_item_content" id="costo_opcion_inversion">$4.000</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Es el cobro que hace Eollice al inversionista por acceder a invertir en este proyecto."></span></div>  
                </div>
                <div class="inversion_item_1" style="border-bottom:none;">
                    <div class="inversion_item_title">Gastos de Administración: </div>
                    <div class="inversion_item_content" id="gastos_administracion">$4.000</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Cobro que se realiza por el servicio de cobro de cuota al dueño del proyecto renovable y de transferencia a tu cuenta de banco asociada a la inversión."></span></div>
                </div>
              </div>
            </div>
            <div class="retorno_inversion">
              <div class="costos_inversion_title">Retornos de la Inversión: </div>
              <div class="costos_inversion_table">
                <div class="inversion_item_2">
                    <div class="inversion_item_title">Tasa Interna de Retorno Anual (TIR): </div>
                    <div class="inversion_item_content" id="tir_anual"><?php echo $simu['proyecto']['tir']; ?> %</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="(Tasa Interna de Retorno) Es la tasa que ve el inversionista al invertir su dinero en Eollice."></span></div>  
                </div>
                <div class="inversion_item_1">
                    <div class="inversion_item_title">Plazo para Recuperar la Inversión: </div>
                    <div class="inversion_item_content" id="plazo_recuperar">$4.000</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Tiempo, en meses, que tardas en recuperar el dinero invertido. Por ejemplo si el tiempo de recuperación es 40 meses, es porque en el 40° mes se te habrá depositado el equivalente a tu inversión."></span></div>  
                </div>
                <div class="inversion_item_2">
                    <div class="inversion_item_title">Cuota Mensual: </div>
                    <div class="inversion_item_content" id="cuota_mensual">$4.000</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Es el dinero que se te depositará mes a mes por haber invertido en el proyecto. Este valor ya considera el descuento por Gastos de Administración."></span></div>  
                </div>
                <div class="inversion_item_1" style="border-bottom:none;">
                    <div class="inversion_item_title">Utilidades al Final del Crédito: </div>
                    <div class="inversion_item_content" id="utilidades_credito">$4.000</div>
                    <div class="inversion_item_tooltip"><span class="glyphicon glyphicon-question-sign tooltip_data_info"   data-toggle="tooltip" data-placement="bottom" title="Es la ganancia obtenida en el proceso de inversión al final del periodo de dicha inversión."></span></div>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->