$("#form-login").on('submit', function(e){
    $("#btnlogin").prop('disabled',true);
    e.preventDefault();
    fdata = new FormData(this)
    fdata.append('action', 'login');
    //fdata.append('creador_por', usrInfo.idAcceso);
    $.ajax({
        url: './controllers/login.controller.php',
        type: "POST",
        data: fdata,
        contentType:false,
        processData:false,
        success: function(data){
            try{
                pr = JSON.parse(data)
                if (pr.status == 'success'){
                    var vista='';
                    toastr.success(pr.message);

                    let nivel = parseInt(pr.nivel);
                    
                    switch (nivel) {
                        case 1:
                            vista = './';
                            break;
                        case 2:
                            vista = '?pagina=profesores';
                            break;
                        case 3:
                            vista = '?pagina=usuarios';
                            break;                       
                        default:
                            break;
                    }
                    setTimeout(function(){
                        window.location.href = vista;
                    }, 1000);
                }else{
                    toastr.error(pr.message);
                    $('input[name=typeAccess]').prop('checked',false);
                }
            }catch(e){
                console.log(e);
                console.log(data);
            }
        },
        complete: function(){
            $("#btnlogin").prop('disabled',false);
        },
        error: function(e){
            console.log(e.responseText);	
        }
    });
})