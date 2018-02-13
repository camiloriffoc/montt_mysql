$('.update-forma-disolucion-liquidacion-ajax').on("submit", function(ev){
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
            	
            	$('#principalPanel').empty().append($(data));
            	$('html, body').animate({scrollTop:0}, 'slow');
            	$('#myAlertModal  .modal-body').html('<p>Registro Guardado</p>');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                $('#myAlertModal  .modal-body').html('<p>'+err+'</p>');
                $('#myAlertModal').modal('show');
            },
        });

        return false;
    });