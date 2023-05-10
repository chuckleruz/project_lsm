<?php if ($permisos->verificar_permiso($_SESSION["usuario"]["nivel"], "alumnos")) : ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Administrar Alumnos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Administrar Alumnos</li>
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
                  Alta de alumnos
                </button>
              </div>
              <div class="card-body">
                <h3 class="card-title">Lista de alumnos</h3>
                <br>
                <div class="table-responsive">
                  <table id="obtenerAlumnos" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nombre completo</th>
                      <th>Correo electrónico</th>
                      <th>Fecha de registro</th>
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

  <?php include "./partials/modals/modal.alumnos.php" ?>

  <!-- /.modal -->
  <?php include "./partials/footer/js/scripts.php" ?>

  <!-- DataTables  & Plugins -->
  <?php include "./partials/footer/js/scripts.data-table.php" ?>

  <!-- Scripts personalizados -->
  <?php include "./partials/footer/js/scripts.alumnos.php" ?>
<?php endif; ?>