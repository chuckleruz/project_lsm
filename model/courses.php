<?php

include "./connection/connect.php";

class Courses {

    var $conn;
    function __construct(){
        $con = new Connection();
        $this->conn = $con->conn();
    }
    function __destruct(){
        $this->conn = null;
    }

    public function insertCourse($post){
        $sql = "INSERT INTO Cursos (NombreCurso, Descripcion, DocenteACargo, FechaInicio, FechaFinalizacion, EstadoCurso)
        VALUES (:nombreCurso, :descripcion, :idDocente, :fechaInicio, :fechaFinalizacion, :estado)";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }
}