$(document).ready(function(){
$('#myModalAlertGeneral').modal('hide');

    $('.add-registro-ajax').on("submit", function(ev){
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
            dataType: "json",
            processData: false,
            contentType: false,
            //Se ejecuta antes que la petición inicie
            beforeSend: function(){
                $button.val("Cargando...");
            },
            //El servidor responde y todo sale bien
            success: function(data){
                console.log('Data',data);
            	if(data.iden == "Limpiar"){
            		$form.find('input[type="text"]').val('');

            	}
            	
                $('#myModalAlertGeneral').modal('show');
                $button.val("Guardar");
                  
            },
            error: function(err){
                console.log('Error',err);
                if(err.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                
                $('#myModalAlertGeneral').modal('show');
                $button.val("Guardar");
            },
        });

        return false;
    });

    //Agregar SUCURSAL
    $('.add-registro-ajax-sucursal').on("submit", function(ev){
        ev.preventDefault();
        var $form = $(this);
        //Para buscar en el formulario un elemento que tenga el type submit
        var $button = $form.find("[type='submit']");
        var $url = $form.attr("action");
        
        //Petición AJAX
        $.ajax({
            url: $url,
            method: $form.attr("method"),
            data: $form.serialize(),
            dataType: "JSON",
            //Se ejecuta antes que la petición inicie
            beforeSend: function(){
                $button.val("Cargando...");
            },
            //El servidor responde y todo sale bien
            success: function(data){
                if(data.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                $('#myModalAddGiros').modal('hide');
                $('#myModalAddSucursal').modal('hide');
                $('#myModalAlertGeneral').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log(err)
                $button.val("Hubo un Error...");
            },
        });

        return false;
    });

    //Botón modal acceder data de giro
    $('.edit-giro').on("click",function(ev){
        ev.preventDefault();

        var $boton = $(this);
        var $url = $boton.attr('href');
        $.ajax({
            type: 'GET',
            url: $url,
            dataType: 'json',
            beforeSend: function () {
                    $boton.val('Cargando...');
                },
            success: function (data) {
                $('#modalEditGirosData').empty().append($(data));
                //alert('mostre la página');
                
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

    });




});