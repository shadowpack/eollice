<?php
  @include_once('controller/proyectos.php');
  $bancos = proyectos::get_bancos();
?>
<script src="controller/add_banco.js"></script>
<link rel="stylesheet" href="css/add_banco.css">
<!-- Modal -->
  <div class="modal fade" id="add_banco" tabindex="-1" role="dialog" aria-labelledby="add_banco" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="modal-bank-title">Agregar Cuenta Bancaria</h4>
        </div>
        <div class="modal-body" id="banco-body">
          <form role="form">
            <label class="add_banco_messagetop text-primary">En esta cuenta recibirás el pago de cuotas de todas tus inversiones.</label>
            <div class="form-group">
              <label for="exampleInputEmail1">Banco</label>
              <div class="input-group">
                <span class="input-group-addon">Banco</span>
                <select class="form-control" id="banco_input">
                  <option value="#">Selecciona tu Banco</option>
                  <?php
                    foreach ($bancos as $key => $value) {
                      echo '<option value="'.$value[0].'">'.utf8_encode($value[1]).'</option>';
                    }
                  ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Tipo de Cuenta</label>
              <div class="input-group">
                <span class="input-group-addon">Tipo</span>
                <select class="form-control" id="tipo_cuenta_input">
                  <option value="#">Selecciona el tipo de Cuenta</option>
                  <option value="0">Cuenta Corriente</option>
                  <option value="1">Cuenta Vista</option>
                </select>
              </div>
            </div>
             <div class="form-group">
              <label for="exampleInputEmail1">Número de Cuenta</label>
              <div class="input-group">
                <span class="input-group-addon">N°</span>
                <input type="text" class="form-control" placeholder="Numero de Cuenta" id="numero_cuenta_input">
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="add_banco_btn" class="btn btn-primary">Agregar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->