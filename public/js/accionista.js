$(document).ready(function(){
	//Se agrega un nuevo accionista
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
            dataType: "JSON",
            processData: false,
            contentType: false,
            //Se ejecuta antes que la petición inicie
            beforeSend: function(){
                $button.val("Cargando...");
            },
            //El servidor responde y todo sale bien
            success: function(data){
            	if(data.iden == "Limpiar"){
            		$form.find('input[type="text"]').val('');
            	}
            	$('.modal-body').html('<p>'+data.message+'</p>');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                if(err.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                $('#myAlertModal .modal-body').html('<p>'+data.message+'</p>');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
            },
        });

        return false;
    });

    //Se actualiza un accionista
    $('.update-registro-ajax').on("submit", function(ev){

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
            	if(data.iden == "Limpiar"){
            		$form.find('input[type="text"]').val('');
            	}
            	$('#myAlertModal .modal-body').html('<p>'+data.message+'</p>');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                if(err.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
            },
        });

        return false;
    });

    //Función para eliminar accionista
    $('.delete-accionista').on('click',function(){
    	var $row = $(this).parents('tr');
    	var $id = $row.data('id');
    	var $form = $('#form-delete-accionista');
    	var $url = $form.attr('action').replace(':ACCIONISTA_ID',$id);
    	var $data = $('#form-delete-accionista');
        var $formData = new FormData($data);
    	//Petición AJAX
        $.ajax({
            url: $url,
            method: $form.attr("method"),
            data: $formData,
            dataType: "JSON",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            processData: false,
            contentType: false,
            //Se ejecuta antes que la petición inicie
            beforeSend: function(){
            },
            //El servidor responde y todo sale bien
            success: function(data){
            	if(data.iden == "Limpiar"){
            		$form.find('input[type="text"]').val('');
            	}
            	$('#myAlertModal .modal-body').html('<p>'+data.message+'</p>');
                $('#myAlertModal').modal('show');
                $row.hide();

                

            },
            error: function(err){
                console.log('Error',err);
            },
        });

    });

    //Comprobamos el valor inicial del select fallecido
    var valor_inicial_fallecido_select = $('.control-accionista-fallecido').val();
    comprobarValorSelectFallecido(valor_inicial_fallecido_select);

    //Función para habilitar campos de accionista fallecido
    $('.control-accionista-fallecido').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectFallecido(valor);
    });


    function comprobarValorSelectFallecido(variable){
        if(variable == 'si'){
            $('.div-accionista-fallecido').show();
        }else{
            $('.div-accionista-fallecido').hide();
        }
    }

});