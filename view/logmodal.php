<script src="controller/logmodal.js"></script>
<link rel="stylesheet" href="css/logmodal.css">
<!-- Modal -->
  <div class="modal fade" id="logForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Ingresa en Eollice</h4>
        </div>
        <div class="modal-body" id="modal-log" style="overflow:hidden; padding-bottom:0px;">
          <form role="form">
            <label class="messageinput text-danger"></label>
            <div class="form-group">
              <label for="emailInput">E-Mail</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" id="emailLog" class="form-control" placeholder="E-Mail">
              </div>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <div class="input-group">
                <span class="input-group-addon">Password</span>
                <input type="password" id="passwordLog" class="form-control" placeholder="Contraseña">
              </div>
            </div>
            <div>
              <p class="text-primary link-buton" id="forgotPasswordLink">Olvide mi Contraseña</p>
              <p class="text-primary link-buton" id="registerLink">Registrarme</p>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" id="logButton" class="btn btn-primary">Ingresar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->