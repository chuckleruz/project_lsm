<?php if ($permisos->verificar_permiso($_SESSION["usuario"]["nivel"], "cursos")) : ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrar Cursos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Cursos</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                  Alta de curso
                </button>
              </div>
              <div class="card-body">
                <h3 class="card-title">Lista de Cursos</h3>
                <br>
                <div class="table-responsive">
                  <table id="obtenercursos" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombre del curso</th>
                      <th>docente a cargo</th>
                      <th>Fecha de inicio</th>
                      <th>Fecha de finalización</th>
                      <th>Opciones</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "./partials/modals/modal.cursos.php" ?>

  <!-- /.modal -->
  <?php include "./partials/footer/js/scripts.php" ?>

  <!-- DataTables  & Plugins -->
  <?php include "./partials/footer/js/scripts.data-table.php" ?>

  <!-- Scripts personalizados -->
  <?php include "./partials/footer/js/scripts.cursos.php" ?>
<?php endif; ?>