
<?php  include "partials/header/header.php" ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "partials/navigation/navigation.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/AdminLTE-3.2.0/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">LMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/AdminLTE-3.2.0/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Chuck Levien</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="index.php?pagina=pacientes" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Usarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=doctores" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Profesores</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=presupuesto" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
              <p>Cursos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=descuentos" class="nav-link">
              <i class="fas fa-settings nav-icon"></i>
              <p>Ajustes</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "cursos" ||
            $_GET["pagina"] == "usuarios" ||
            $_GET["pagina"] == "profesores" ||
            $_GET["pagina"] == "ajustes" ||
            $_GET["pagina"] == "reportes" ||
            $_GET["pagina"] == "evaluacion" ||
            $_GET["pagina"] == "administracionUsuarios") {
            include "vistas/" . $_GET["pagina"] . ".php";
        }
    }else {
        include "vistas/dashboard.php";
    }
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?php include "partials/footer/footer.php" ?> 
<!-- ./wrapper -->
</div>

<?php include "partials/footer/js/scripts.php" ?>

</body>
</html>
