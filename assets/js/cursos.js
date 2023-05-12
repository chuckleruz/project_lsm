$(document).ready(function() {

    $.ajax({
        url: './controllers/docentes.controller.php',
        method: 'GET',
        data: { action: "obtenerDocentesSelect" },
        success: function(resp) {
          let json = JSON.parse(resp);
          var opciones = json.data; 
          var select = $('#idDocente');
          select.empty();
          select.append($('<option disabled selected>').val('').text('- Selecciona el profesor a cargo -'))
          $.each(opciones, function(index, opcion) {
            select.append($('<option>').val(opcion.id_docente).text(opcion.nombre+' '+opcion.apellido));
          });
        },
        error: function() {
            toastr.error('Error al cargar las opciones');
          console.log('Error al cargar las opciones');
        }
    });
});

$("#form-alta-curso").on('submit', function(e){
    $("#registrardocentes").prop('disabled',true);
    e.preventDefault();
    fdata = new FormData(this)

    let method = $("#medotodelmodal").val();
    let action = method != '' ? method : 'registrarCursos';

    fdata.append('action', action);
    //fdata.append('creador_por', usrInfo.idAcceso);
    $.ajax({
        url: './controllers/cursos.controller.php',
        type: "POST",
        data: fdata,
        contentType:false,
        processData:false,
        success: function(data){
            try{
                pr = JSON.parse(data)
                if (pr.status == 'success'){
                    toastr.success(pr.message)
                    tcursos.ajax.reload();
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
            $('#form-alta-curso')[0].reset();
            $("#registrarcursos").prop('disabled',false);
        }
    });
})

$('#modalAdd').on('click',()=>{
    $("#medotodelmodal").val('');
    $('#form-alta-curso')[0].reset();
    $("#idCurso").val('');
    $('#status').addClass('d-none')
});

var tcursos = $("#obtenercursos").DataTable({
    responsive: true,
    Processing: true,
    ServerSide: true,
    "lengthChange": false,
    "ajax": {
        url: './controllers/cursos.controller.php',
        type: 'POST',
        data: {action: 'obtenerCursos'},
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
function eliminarcursos(id) {

    $.ajax({
        url: "./controllers/cursos.controller.php",
        data: { id: id, action: "eliminarCurso" },
        type: "POST",
        dataType: "json",
        success: function (response) {
            try {
                if (response.status=="success") {
                    toastr.success(response.message)
                    // Actualizar la tabla de pacientes
                    tcursos.ajax.reload();
                  } else {
                    toastr.error(response.message)
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

function editarcurso(id){

    $('#medotodelmodal').val('actualizarCurso');
    $("#idCurso").val(id);
    $.ajax({
        url: './controllers/cursos.controller.php',
        type: "GET",
        data: {action: "obtenerCurso", id: id },
        dataType: "json",
        success: function(resp){

            try{
                if (resp.status == 'success'){

                $('#nombreCurso').val(resp.data.nombre_del_curso)
                $('#idDocente').val(resp.data.docente_a_cargo)
                $('#fechaInicio').val(resp.data.fecha_de_inicio)
                $('#fechaFinalizacion').val(resp.data.fecha_de_finalizacion)
                $('#descripcion').val(resp.data.descripcion)
                $('#status').removeClass('d-none')

                resp.data.visible == 'activo' ? $('#visible').prop('checked', true) : $('#visible').prop('checked',false)

            }
            }catch(e){
                console.log(e);
                console.log(resp);
            }
        },
    });

}

function listauser(id){

    $("#obtenerAlumnos").DataTable({
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
}
