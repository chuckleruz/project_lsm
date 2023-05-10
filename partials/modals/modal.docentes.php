<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <input type="hidden" id="medotodelmodal" value="">
      <form id="form-alta-docente" method="post">
        <div class="modal-header">
        <input type="hidden" id="idDocente" name="id" value="">
          <h4 class="modal-title">Registrar docentes</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modalAdd">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aPaterno">Apellido:</label>
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa el apellido" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa el Email" required>
                  <div class="invalid-feedback" id="email-feedback"></div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button id="registrardocente" type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- modals -->
