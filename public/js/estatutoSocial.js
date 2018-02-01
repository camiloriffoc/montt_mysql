
$(document).ready(function(){

    //Funcion para agregar por AJAX una nueva Accion
    $('.add-estatuto').on("submit", function(ev){
        ev.preventDefault();
        var $form = $(this);
        //Para buscar en el formulario un elemento que tenga el type submit
        var $button = $form.find("[type='submit']");
        var $url = $form.attr("action");
        var $data = $(this)[0];

        var $formData = new FormData($data);
        
        //Petición AJAX
        $.ajax({
            url: $url,
            method: $form.attr("method"),
            data: $formData,
            dataType: "JSON",
            processData: false,
            contentType: false,
            //Se ejecuta antes que la petición inicie
            beforeSend: function(){
                $button.val("Cargando...");
            },
            //El servidor responde y todo sale bien
            success: function(data){
            
                
                $('html, body').animate({scrollTop:0}, 'slow');
                $('.modal-body').html('<p>Guardo con Exito</p>');
                $('#myAlertModal').modal('show');
                $('#principalPanel').empty().append($(data));

            },
            error: function(err){
                console.log('Error',err);
                $('.modal-body').html('<p>'+err+'</p>');
                $('#myAlertModal').modal('show');
            },
        });

        return false;
    });

    $('.delete-estatuto').on('click',function(event){
        event.preventDefault();

        if (confirm("Esta seguro que desea eliminar")) {
            
            var url = $(this).attr("href");
       
            $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            beforeSend: function () {
                        $('#principalPanel').empty();
                        $("#resultado").show();
                },
            success: function (data) {
                $('#principalPanel').empty().append($(data));
                $("#resultado").hide();
                $('html, body').animate({scrollTop:0}, 'slow');
                $('.modal-body').html('<p>Regimen ELiminado con Exito</p>');
                $('#myAlertModal').modal('show');

            },
            error: function (data) {
                var errors = data.responseJSON;
                if (errors) {
                    $.each(errors, function (i) {
                        alert(errors[i]);

                    });
                }
            }
            });
        } 
        else {
            
        }
        
    })

});


