<?php 
require("./model/connection/connect.php");
require("./model/permisos.model.php");
$permisos = new Permisos();
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
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
          <a href="#" class="d-block"><?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellido'] ?></a>
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
            <a href="index.php?pagina=alumnos" class="nav-link">
              <i class="fa fa-user-graduate"></i>
              <p>Alumnos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=docentes" class="nav-link">
              <i class="fa fa-people-arrows"></i>
              <p>Profesores</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=cursos" class="nav-link">
              <i class="fa fa-book-open"></i>
              <p>Cursos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=sesiones" class="nav-link">
              <i class="fa fa-video"></i>
              <p>Sesiones</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?pagina=ajustes" class="nav-link">
              <i class="fa fa-wrench"></i>
              <p>Ajustes</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>