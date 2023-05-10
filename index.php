
<?php  
include "partials/header/header.php";

session_start();
if (isset($_SESSION["usuario"])) {
?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <?php include "./partials/navigations/navigation.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include "./partials/navigations/siderbar.php" ?>

  <?php
    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == "cursos" ||
            $_GET["pagina"] == "alumnos" ||
            $_GET["pagina"] == "docentes" ||
            $_GET["pagina"] == "sesiones" ||
            $_GET["pagina"] == "ajustes" ||
            $_GET["pagina"] == "reportes" ||
            $_GET["pagina"] == "evaluacion" ||
            $_GET["pagina"] == "administracionUsuarios") {
            include "views/" . $_GET["pagina"] . ".php";
        }
    }else {
        include "views/dashboard.php";
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
  <?php include "./partials/footer/footer.php"; ?> 
<!-- ./wrapper -->
</div>

<?php include "./partials/footer/js/scripts.general.php"; ?>

<!-- iniciar sesión -->
<?php
  }else {
      include "views/login.php";
  }
  ?>
  <!-- iniciar sesión -->
</body>
</html>
