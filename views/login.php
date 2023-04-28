<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>L</b>MS</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Iniciar sesión</p>
        <form id="form-login" method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="correo" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="contrasena" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 mb-3">
            <input type="radio" id="doc" name="typeAccess" value="docentes"> 
            <label for="doc">¿Eres docente?</label>
            
            </div>
            <div class="col-6">
            <input type="radio" id="est" name="typeAccess" value="estudiantes">  
            <label for="pest">¿Eres estudiante?</label>
              
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button id="btnlogin" type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
        <hr>
        <p class="mb-1">
          <a href="#">Olvide mi contraseña</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <!-- Bootstrap 4 -->
  <!-- AdminLTE App -->
  <?php include "../partials/footers/js/scripts.php" ?>
  <!-- Scripts personalizados -->
  <?php include "../partials/footers/js/scripts.login.php" ?>