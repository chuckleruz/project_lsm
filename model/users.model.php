<?php
class Users {

    var $conn;
    function __construct(){
        $con = new Connection();
        $this->conn = $con->conn();
    }
    function __destruct(){
        $this->conn = null;
    }

    

    public function insertAdmin($post){
         $date = date('Y-m-d H:i:s');

        $sql = "INSERT INTO administradores (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado,nivel)
        VALUES (:nombre, :apellido, :correo, '$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2', '$date', '1','1');";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }

    public function insertStudents($post){
        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO estudiantes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado,nivel) 
        VALUES (:nombre, :apellido, :email, '$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2', '$date', '1','3')";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }

    public function insertProfesor($post){

        $date = date('Y-m-d H:i:s');
        $sql = "INSERT INTO docentes (nombre, apellido, correo_electronico, contrasena, fecha_de_registro, estado,nivel)
        VALUES (:nombre, :apellido, :email, '$2y$10$9QmIefhwlrh0w46lswn0h.ONFr0xIqcC9Aa.sIEdmwrlpjMDt7jI2', '$date', 'activo','2');";
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