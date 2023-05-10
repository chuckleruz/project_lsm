$("#cerrar-sesion").click(function() {
    $.ajax({
        url: './controllers/login.controller.php',
        type: "POST",
        data:  {action: 'logout'},
        success: function(data){
            try{
                pr = JSON.parse(data)
                if (pr.status == 'success'){
                    toastr.success(pr.message);
                        window.location.href = './';
                }else{
                    toastr.error(pr.message);
                }
            }catch(e){
                console.log(e);
                console.log(data);
            }
        },
        error: function(e){
            console.log(e.responseText);	
        }
    });
  });