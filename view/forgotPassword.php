<script src="controller/forgotPassword.js"></script>
<!-- Modal -->
  <div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Recupera tu Contraseña</h4>
        </div>
        <div class="modal-body" id="forgot-body">
          <form role="form">
            <label class="messageinputForgot text-danger"></label>
            <div class="form-group">
              <label for="exampleInputEmail1">E-Mail</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="E-Mail" id="forgotEmail">
              </div>
            </div>
            <div class="checkbox">
              <label>
              <br>
                <input type="checkbox" id="checkForgot"> Acepto las politicas de privacidad y uso.
              </label>
            </div>
          </form>
        </div>
        <div class="modal-body" id="forgot-success">
          <div id="forgot-status0">Te hemos enviado un e-mail con los datos para recuperar tu contraseña.</div>
          <div id="forgot-status2">Existe un error al modificar la base de datos.<br> Contacte con el staff de Eollice.</div>
          <div id="forgot-status3">El servidor de correos no esta disponbile. <br> Contacte con el staff de Eollice.</div>
        </div>
        <div class="modal-footer">
          <button type="button" id="forgotButton" class="btn btn-primary">Recuperar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->