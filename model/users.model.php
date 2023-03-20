<?php

include "./connection/connect.php";

class Students {

    var $conn;
    function __construct(){
        $con = new Connection();
        $this->conn = $con->conn();
    }
    function __destruct(){
        $this->conn = null;
    }

    public function insertAdmin($post){

        $sql = "INSERT INTO administradores (nombre, apellido, correo_electronico, contrasenia, fecha_de_registro, estado)
        VALUES (:nombre, :apellido, :correo, :contrasenia, :fecha_registro, :estado);";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }

    public function insertStudents($post){

        $sql = "INSERT INTO Estudiantes (nombre, apellido, correo_electronico, contrasenia, fecha_de_registro, estado) 
        VALUES (:nombre, :apellido, :correo, :contrasenia, :fecha_registro, :estado)";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }

    public function insertProfesor($post){

        $sql = "INSERT INTO docentes (nombre, apellido, correo_electronico, contrasenia, fecha_de_registro, estado)
        VALUES (:nombre, :apellido, :correo, :contrasenia, :fecha_registro, :estado);";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }
}

?>