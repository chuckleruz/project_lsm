<?php

class Alumnos
{
    var $conexion;
    function __construct(){
        $con = new Connection();
        $this->conexion = $con->conn();
    }
    function __destruct(){
        $this->conexion = null;
    }
    
    function obtenerAlumnos(){
        $query = "SELECT * FROM `estudiantes`";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    function obtenerAlumno($idAlumno){
        $query = "SELECT * FROM `estudiantes` WHERE id_estudiante = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($idAlumno);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    function actualizarAlumnos($data){

        $query = "UPDATE `estudiantes` SET `nombre`=:nombre, `apellido`=:apellido, `correo_electronico`=:email 
        WHERE id_estudiante = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($data);
        if($stmt->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
    function eliminarAlumnos($idAlumno){
        $query = "DELETE FROM `estudiantes` WHERE id_estudiante = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($idAlumno);
        if($stmt->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
    function validarsiExisteEmail($emailAlumnos){
        $query = "SELECT * FROM `estudiantes` WHERE correo_electronico = :email";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($emailAlumnos);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    
}