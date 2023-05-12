<div class="modal fade" id="modal-xl">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <input type="hidden" id="medotodelmodal" value="">
      <form id="form-alta-alumno" method="post">
        <div class="modal-header">
        <input type="hidden" id="idCurso" name="id" value="">
          <h4 class="modal-title">Registrar Curso</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="modalAdd">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombreCurso">Nombre del curso:</label>
                  <input type="text" class="form-control" id="nombreCurso" name="nombreCurso" placeholder="Ingresa el nombre del curso" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="idDocente">Nombre del profesor:</label>
                    <select name="idDocente" id="idDocente" class="form-control">
                          <option value="" disabled selected>- Selecciona el profesor a cargo -</option>
                    </select>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                <div class="form-group">
                        <label for="fechaInicio">Fecha de inicio:</label>
                        <input type="date" id="fechaInicio" name="fechaInicio" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                        <label for="fechaFinalizacion">Fecha de finalización:</label>
                        <input type="date" id="fechaFinalizacion" name="fechaFinalizacion" class="form-control">
                </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                    <label for="visible">Visible:</label>
                    <input type="checkbox" id="visible" name="estado">
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="form-group">
                    <label for="descripcion">Descripción del curso:</label>
                    <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingresa una brevé descripción" required>
                    </textarea>
                    <div class="invalid-feedback" id="email-feedback"></div>
                    </div>
                </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button id="registraralumno" type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- modals -->

<div class="modal fade" id="modal-list-user">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Listado de alumnos</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card-body">
                <br>
                <div class="table-responsive">
                  <table id="obtenerAlumnos" class="table table-bordered w-100">
                    <thead>
                    <tr>
                      <th>Nombre completo</th>
                      <th>Correo electrónico</th>
                      <th>Fecha de registro</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
          </div>
          <!-- /.card-body -->
        </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>