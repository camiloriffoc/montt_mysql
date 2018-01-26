$(document).ready(function(){
	$('#myModalAlertDerechoRetiro').modal('hide');
    //Agregar por AJAX capital social
    $('.add-registro-ajax').on("submit", function(ev){
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
            	
                $('#myModalAlertDerechoRetiro').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                if(err.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                
                $('#myModalAlertEditSerie').modal('show');
                $button.val("Guardar");
            },
        });

        return false;
    });
});