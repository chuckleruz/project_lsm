<?php
class Permisos
{
  var $conexion;
  var $conn;

  function __construct()
  {
    $con = new Connection();
        $this->conn = $con->conn();
  }

  function __destruct()
  {
    $this->conexion = null;
  }

  function verificar_permiso($nivel, $vista)
  {
    $query = "SELECT COUNT(*) as cuenta FROM permisos WHERE idNivel = :nivel AND vista = :vista";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(":nivel", $nivel, PDO::PARAM_INT);
    $stmt->bindParam(":vista", $vista, PDO::PARAM_STR);
    $stmt->execute();
    $resultado= $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultado['cuenta'];
  }
  
}

?>