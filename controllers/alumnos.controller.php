<?php
require("../model/connection/connect.php");
require("../model/alumnos.model.php");
require("../model/users.model.php");

$accion=@isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
unset($_POST['action']);

$model = new Alumnos();
$reg = new Users();

switch ($accion) {

        case 'registrarAlumnos':
            unset($_POST['id']);
            $alumnos=$reg->insertStudents($_POST);
            if ($alumnos) {
                echo json_encode([
                    "status" => "success",
                    "message" => "Alumno registrado correctamente"
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido registrar al alumno"
                ]);
            }
        break;
        case 'obtenerAlumnos':
            $alumnos = $model->obtenerAlumnos();
            $data = Array();
            while($dato=$alumnos->fetchObject()){
                $data[]=array(
                    0=> "<span data-ref='{$dato->id_estudiante}' >".$dato->nombre.' '.$dato->apellido.'</span>',
                    1=> $dato->correo_electronico,
                    2=> $dato->fecha_de_registro,
                    3=>'<a class="btn btn-warning" data-toggle="modal" data-target="#modal-xl" onclick="editaralumno('.$dato->id_estudiante.')"><i class="fas fa-user-edit"></i></a> '.
                    ' <a class="btn btn-danger" onclick="eliminaralumno('.$dato->id_estudiante.')"><i class="fas fa-trash"></i></a> '
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
        case 'obtenerAlumno':
            unset($_GET['action']);
            $alumnos=$model->obtenerAlumno($_GET);
            if ($alumnos) {
                echo json_encode([
                    "status" => "success",
                    "data" => $alumnos
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido obtener al alumno"
                ]);
            }
            break;
        case 'actualizarAlumno':
            $update = $model->actualizarAlumnos($_POST);
            if($update){
                echo json_encode([
                        "status" => "success",
                        "message" => "Alumno actualizado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido actualizar al alumno"
                ]);
            }
            break;
        case 'eliminarAlumno':
            $delete = $model->eliminarAlumnos($_POST);
            if($delete){
                echo json_encode([
                        "status" => "success",
                        "message" => "Alumno eliminado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido eliminar al alumno"
                ]);
            }
            break;
        case 'validarsiExisteEmail':
            $alumnos = $model->validarsiExisteEmail($_POST);
            if ($alumnos) {
                echo json_encode([
                    "status" => "success",
                    "data" => $alumnos
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido obtener al alumno"
                ]);
            }
            break;

            case 'obtenerAlumnosSelect':
                $selectid = true;
                $docentes = $model->obtenerAlumnos($selectid);
                if ($docentes) {
                    echo json_encode([
                        "status" => "success",
                        "data" => $docentes
                    ]);
                } else {
                    echo json_encode([
                        "status" => "error",
                        "message" => "No se ha podido obtener al docente"
                    ]);
                }
                break;
    default:
        # code...
        break;
}
