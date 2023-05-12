<?php

class Docentes
{
    var $conexion;
    function __construct(){
        $con = new Connection();
        $this->conexion = $con->conn();
    }
    function __destruct(){
        $this->conexion = null;
    }
    
    function obtenerDocentes($selectid){
        $query = "SELECT * FROM `docentes`";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        if($selectid){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return $stmt;
        }
    }

    function obtenerDocente($idDocente){
        $query = "SELECT * FROM `docentes` WHERE id_docente = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($idDocente);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    function actualizarDocentes($data){

        $query = "UPDATE `docentes` SET `nombre`=:nombre, `apellido`=:apellido, `correo_electronico`=:email 
        WHERE id_docente = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($data);
        if($stmt->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
    function eliminarDocentes($idDocente){
        $query = "DELETE FROM `docentes` WHERE id_docente = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($idDocente);

        $cur = "DELETE FROM `cursos` WHERE docente_a_cargo = :id";
        $stmtC = $this->conexion->prepare($cur);
        $stmtC->execute($idDocente);
        if($stmtC->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
    function validarsiExisteEmail($emailDocente){
        $query = "SELECT * FROM `docentes` WHERE correo_electronico = :email";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute($emailDocente);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    
}