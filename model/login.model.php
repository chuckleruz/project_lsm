<?php
class Login
{
  var $conexion;

  function __construct()
  {
    $con = new Connection();
    $this->conexion = $con->conn();
  }

  function __destruct()
  {
    $this->conexion = null;
  }

  function obtenerUsuarioPorCorreo($correo,$typeAccess)
  {

    switch($typeAccess){
      case "docentes":
        $query = "SELECT us.* FROM docentes as us  WHERE correo_electronico = :correo";
        
        break;
      case "estudiantes":
        $query = "SELECT us.* FROM estudiantes as us  WHERE correo_electronico = :correo";
        break;
        default: 
        $query = "SELECT us.* FROM administradores as us  WHERE correo_electronico = :correo";
        break;
    }
    $stmt = $this->conexion->prepare($query);
    $stmt->bindParam(":correo", $correo, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
}

?>