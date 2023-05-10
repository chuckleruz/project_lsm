<?php
require("../model/connection/connect.php");
require("../model/login.model.php");

$accion = @isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
unset($_POST['action']);

$model = new Login();

switch ($accion) {
  case 'login':
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $typeAccess = isset($_POST['typeAccess']) ? $_POST['typeAccess'] : false;

      // Encriptar la contraseña ingresada por el usuario
      $contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

      // Obtener los datos del usuario correspondiente al correo electrónico ingresado
      //validation in login users
      $usuario = $model->obtenerUsuarioPorCorreo($correo,$typeAccess);
    

    // Verificar si la contraseña encriptada coincide con la contraseña almacenada en la base de datos
    if ($usuario && password_verify($contrasena, $usuario['contrasena'])) {
      // Iniciar la sesión del usuario
      //&& password_verify($contrasena, $usuario['password'])
      session_start();
      $_SESSION["usuario"] = $usuario;
      echo json_encode([
        "status" => "success",
        "message" => "Inicio de sesión exitoso",
        "nivel" => $usuario['nivel']
      ]);
      
    } else {
      echo json_encode([
        "status" => "error",
        "message" => "Correo electrónico o contraseña incorrectos"
      ]);
    }
    break;

  case 'logout':
    // Cerrar la sesión del usuario
    session_start();
    unset($_SESSION["usuario"]);
    session_destroy();
    echo json_encode([
      "status" => "success",
      "message" => "Cerrando sesión ..."
    ]);
    break;

    default:
    echo json_encode([
      "status" => "error",
      "message" => "Acción no permitida"
    ]);
    break;
}