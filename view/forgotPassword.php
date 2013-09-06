<script src="controller/forgotPassword.js"></script>
<!-- Modal -->
  <div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Recupera tu Contraseña</h4>
        </div>
        <div class="modal-body">
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
        <div class="modal-body" id="modal-success">
          <label for="emailInput">Te hemos enviado un E-Mail con los datos para recuperar tu contraseña.</label>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Recuperar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->