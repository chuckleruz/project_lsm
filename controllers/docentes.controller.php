<?php
require("../model/connection/connect.php");
require("../model/docentes.model.php");
require("../model/users.model.php");

$accion=@isset($_POST['action']) ? $_POST['action'] : $_GET['action'];
unset($_POST['action']);

$model = new Docentes();
$reg = new Users();

switch ($accion) {

        case 'registrarDocentes':
            unset($_POST['id']);
            $docentes=$reg->insertProfesor($_POST);
            if ($docentes) {
                echo json_encode([
                    "status" => "success",
                    "message" => "Docentes registrado correctamente"
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido registrar al docente"
                ]);
            }
        break;
        case 'obtenerDocentes':
            $docentes = $model->obtenerDocentes();
            $data = Array();
            while($dato=$docentes->fetchObject()){
                $data[]=array(
                    0=> "<span data-ref='{$dato->id_docente}' >".$dato->nombre.' '.$dato->apellido.'</span>',
                    1=> $dato->correo_electronico,
                    2=> $dato->fecha_de_registro,
                    3=>'<a class="btn btn-warning" data-toggle="modal" data-target="#modal-xl" onclick="editardocente('.$dato->id_docente.')"><i class="fas fa-user-edit"></i></a> '.
                    ' <a class="btn btn-danger" onclick="eliminardocente('.$dato->id_docente.')"><i class="fas fa-trash"></i></a> '
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
        case 'obtenerDocente':
            unset($_GET['action']);
            $docentes=$model->obtenerDocente($_GET);
            if ($docentes) {
                echo json_encode([
                    "status" => "success",
                    "data" => $docentes
                ]);
            } else {
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido obtener al alumno"
                ]);
            }
            break;
        case 'actualizarDocente':
            $update = $model->actualizarDocentes($_POST);
            if($update){
                echo json_encode([
                        "status" => "success",
                        "message" => "Docente actualizado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido actualizar al docentes"
                ]);
            }
            break;
        case 'eliminarDocente':
            $delete = $model->eliminarDocentes($_POST);
            if($delete){
                echo json_encode([
                        "status" => "success",
                        "message" => "Docente eliminado correctamente"
                    ]);
            }else{
                echo json_encode([
                    "status" => "error",
                    "message" => "No se ha podido eliminar al docentes"
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
    default:
        # code...
        break;
}
