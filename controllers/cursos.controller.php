<?php
require("../model/connection/connect.php");
require("../model/courses.model.php");

$accion=@isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
unset($_POST['action']);

$model = new Courses();

switch ($accion) {

        case 'registrarCursos':
            unset($_POST['id']);
            $cursos=$model->insertCourse($_POST);
            if ($cursos) {
                echo json_encode([
                    "status" => "success",
                    "message" => "Curso registrado correctamente"
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido registrar el curso"
                ]);
            }
        break;
        case 'obtenerCursos':
            $cursos = $model->obtenerCursos();
            $data = Array();
            while($dato=$cursos->fetchObject()){
                $data[]=array(
                    0=> "<span data-ref='{$dato->id_curso}' >".$dato->nombre_del_curso.'</span>',
                    1=> $dato->nombre,
                    2=> $dato->fecha_de_inicio,
                    3=> $dato->fecha_de_finalizacion,
                    4=>'<a class="btn btn-warning" data-toggle="modal" data-target="#modal-xl" onclick="editarcurso('.$dato->id_curso.')"><i class="fas fa-edit"></i></a> '.
                    ' <a class="btn btn-danger" onclick="eliminarcursos('.$dato->id_curso.')"><i class="fas fa-trash"></i></a> '.
                    ' <a class="btn btn-danger" data-toggle="modal" data-target="#modal-list-user" onclick="listauser('.$dato->id_curso.')"><i class="fa fa-user-graduate"></i></a> '
                );
            }
            $result = array(
                'sEcho'=>1,
                'iTotalRecords'=>count($data),
                'iTotalDisplayRecords'=>count($data),
                'aaData'=>$data
            );
            echo json_encode($result);
            break;
        case 'obtenerCurso':
            unset($_GET['action']);
            $cursos=$model->obtenerCurso($_GET);
            if ($cursos) {
                echo json_encode([
                    "status" => "success",
                    "data" => $cursos
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido obtener el curso"
                ]);
            }
            break;
        case 'actualizarCurso':
            $update = $model->actualizarCurso($_POST);
            if($update){
                echo json_encode([
                        "status" => "success",
                        "message" => "Curso actualizado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido actualizar el curso"
                ]);
            }
            break;
        case 'eliminarCurso':
            $delete = $model->eliminarCurso($_POST);
            if($delete){
                echo json_encode([
                        "status" => "success",
                        "message" => "Curso eliminado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido eliminar el curso"
                ]);
            }
            break;
    default:
        # code...
        break;
}
