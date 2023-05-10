
$("#form-alta-alumno").on('submit', function(e){
    $("#registraralumnos").prop('disabled',true);
    e.preventDefault();
    fdata = new FormData(this)

    let method = $("#medotodelmodal").val();
    let action = method != '' ? method : 'registrarAlumnos';

    fdata.append('action', action);
    //fdata.append('creador_por', usrInfo.idAcceso);
    $.ajax({
        url: './controllers/alumnos.controller.php',
        type: "POST",
        data: fdata,
        contentType:false,
        processData:false,
        success: function(data){
            try{
                pr = JSON.parse(data)
                if (pr.status == 'success'){
                    toastr.success(pr.message)
                    talumnos.ajax.reload();
                }
            }catch(e){
                console.log(e);
                console.log(data);
            }
        },
        complete: function(){
            if(method != ''){
                $('#modal-xl').removeClass("show");
                $(".modal-backdrop").remove();
                $('body').removeClass('modal-open');
                $('body').css('padding-right', '');
                $('modal-xl').css('padding-right', '');
                $('#modal-xl').removeAttr('role');
                $('#modal-xl').removeAttr('aria-modal');
                $('#modal-xl').attr('aria-hidden',true);
                $('#modal-xl').hide();
            }
            $('#form-alta-alumno')[0].reset();
            $("#registraralumnos").prop('disabled',false);
        }
    });
})

$('#modalAdd').on('click',()=>{
    $("#medotodelmodal").val('');
    $('#form-alta-alumno')[0].reset();
    $("#idAlumno").val('');
});

var talumnos = $("#obtenerAlumnos").DataTable({
    responsive: true,
    Processing: true,
    ServerSide: true,
    "lengthChange": false,
    "ajax": {
        url: './controllers/alumnos.controller.php',
        type: 'POST',
        data: {action: 'obtenerAlumnos'},
        dataType: "JSON",
        error: function(e){
            console.log(e.responseText);	
        }
    },
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    'language':{
        'sLengthMenu': 'Mostrar _MENU_ registros',
        'sInfo': 'Mostrando registro del _START_ al _END_ de un total de _TOTAL_ registros',
        'sInfoEmpty': 'Mostrando registros del 0 al 0 de un total de 0 registros',
        'sInfoFiltered': '(filtrado de un total de _MAX_ registros)',
        'sSearch': 'Buscar:',
        'sLoadingRecords': 'Cargando',
        'oPaginate':{
            'sFirst': 'Primero',
            'sLast': 'Último',
            'sNext': 'Siguiente',
            'sPrevious': 'Anterior'
        },
        buttons: {
            copyTitle: 'Tabla Copiada de manera exitósa',
            copySuccess: {
                _: 'Se copio %d filas',
                1: 'Se copio1 fila'
            }
        }
    },
    'iDisplayLength': 10,
    'order':[
        [0,'asc']
    ]
})

$("#email").on("keyup", function(){
    var email = $(this).val();
    if (email != '') {
        $.ajax({
            url: './controllers/alumnos.controller.php',
            type: 'POST',
            data: {
                action: 'validarsiExisteEmail',
                email: email
            },
            dataType: 'json',
            success: function(data){
                if (data.status == 'success') {
                    // Si se encontró un paciente, mostrar un mensaje de error y deshabilitar el botón de enviar
                    $("#email").addClass("is-invalid");
                    $("#email-feedback").text("Este correo electrónico ya está registrado");
                    $("#registrarpaciente").prop("disabled", true);
                } else {
                    // Si no se encontró ningún paciente, eliminar el mensaje de error y habilitar el botón de enviar
                    $("#email").removeClass("is-invalid");
                    $("#email-feedback").text("");
                    $("#registrarpaciente").prop("disabled", false);
                }
            },
            error: function(xhr, status, error){
                console.log(error);
            }
        });
    }
});

function eliminaralumno(id) {

    $.ajax({
        url: "./controllers/alumnos.controller.php",
        data: { id: id, action: "eliminarAlumno" },
        type: "POST",
        dataType: "json",
        success: function (response) {
            try {
                if (response.status=="success") {
                    toastr.success('Alumno eliminado exitosamente')
                    // Actualizar la tabla de pacientes
                    talumnos.ajax.reload();
                  } else {
                    toastr.error('Ha ocurrido un error al eliminar al alumno')
                  }
                
            } catch (error) {
                console.log(error);
                console.log(response);
                
            }
          
        },
        error: function () {
          toastr.error(response.message)
        }
      });
    
}

function editaralumno(id){

    $('#medotodelmodal').val('actualizarAlumno');
    $("#idAlumno").val(id);
    $.ajax({
        url: './controllers/alumnos.controller.php',
        type: "GET",
        data: {action: "obtenerAlumno", id: id },
        dataType: "json",
        success: function(resp){

            try{
                if (resp.status == 'success'){

                $('#nombre').val(resp.data.nombre);
                $('#apellido').val(resp.data.apellido);
                $('#email').val(resp.data.correo_electronico);
            }
            }catch(e){
                console.log(e);
                console.log(resp);
            }
        },
    });

}
