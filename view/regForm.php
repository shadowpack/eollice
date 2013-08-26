<script src="controller/regForm.js"></script>
<!-- Modal -->
  <div class="modal fade" id="RegForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Registrate en Eollice</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="emailInput">E-Mail</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="E-Mail">
              </div>
            </div>
            <div class="form-group">
              <label for="nameInput">Nombre Completo</label>
              <div class="input-group">
                <span class="input-group-addon">Name</span>
                <input type="text" class="form-control" placeholder="Nombre Completo">
              </div>
            </div>
            <div class="form-group">
              <label for="password">Contraseña</label>
              <div class="input-group">
                <span class="input-group-addon">Password</span>
                <input type="password" class="form-control" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group">
              <label for="repeatPassword">Repite tu Contraseña</label>
              <div class="input-group">
                <span class="input-group-addon">Password</span>
                <input type="password" class="form-control" placeholder="Repite Contraseña">
              </div>
            </div>
            <div class="checkbox">
              <label>
              <br>
                <input type="checkbox"> Acepto las politicas de privacidad y uso.
              </label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Registrarse</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->