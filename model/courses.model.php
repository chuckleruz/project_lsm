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
        $sql = "INSERT INTO cursos (nombre_del_curso, descripcion, docente_a_cargo, fecha_de_inicio, fecha_de_finalizacion, estado_del_curso)
        VALUES (:nombreCurso, :descripcion, :idDocente, :fechaInicio, :fechaFinalizacion, 'activo')";
         $stmt = $this->conn->prepare($sql);
         $stmt->execute($post);
         if($stmt->errorInfo()[1] == null){
             return $this->conn->lastInsertId();
         }else{
             return false;
         }
    }

    public function obtenerCursos(){
        $query = "SELECT CONCAT(dc.nombre,' ',dc.apellido) as nombre, cs.* FROM `cursos` as cs JOIN `docentes` as dc on dc.id_docente = cs.docente_a_cargo ";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    function obtenerCurso($idCurso){
        $query = "SELECT * FROM `cursos` WHERE id_curso = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($idCurso);
        return $stmt->fetch(PDO::FETCH_ASSOC);
        
    }
    function actualizarCurso($data){

        $data['estado'] =  $data['estado'] == 'on' ? 'activo' : 'inactivo';

        $query = "UPDATE `cursos` SET `nombre_del_curso`=:nombreCurso, `descripcion`=:descripcion, `docente_a_cargo`=:idDocente,
        `fecha_de_inicio`=:fechaInicio, `fecha_de_finalizacion`=:fechaFinalizacion, `estado_del_curso`=:estado
        WHERE id_curso = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($data);
        if($stmt->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
    function eliminarCurso($idCurso){
        $query = "DELETE FROM `cursos` WHERE id_curso = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->execute($idCurso);
        if($stmt->errorInfo()[1] == null){
            return true;
        }else{
            return false;
        }
    }
}