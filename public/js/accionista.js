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

    //Comprobamos el valor inicial del select interdiccion
    var valor_inicial_interdiccion_select = $('.control-accionista-interdiccion').val();
    comprobarValorSelectInterdiccion(valor_inicial_interdiccion_select);

    //Función para habilitar campos de accionista fallecido
    $('.control-accionista-interdiccion').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectInterdiccion(valor);
    });


    function comprobarValorSelectInterdiccion(variable){
        if(variable == 'si'){
            $('.div-accionista-interdiccion').show();
        }else{
            $('.div-accionista-interdiccion').hide();
        }
    }

    //Comprobamos el valor inicial del select menor edad
    var valor_inicial_menor_edad_select = $('.control-accionista-menor-edad').val();
    comprobarValorSelectMenorEdad(valor_inicial_menor_edad_select);

    //Función para habilitar campos de accionista fallecido
    $('.control-accionista-menor-edad').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectMenorEdad(valor);
    });


    function comprobarValorSelectMenorEdad(variable){
        if(variable == 'si'){
            $('.div-accionista-menor-edad').show();
        }else{
            $('.div-accionista-menor-edad').hide();
        }
    }

    //Comprobamos el valor inicial del select liquidador
    var valor_inicial_liquidador = $('.control-accionista-liquidador').val();
    comprobarValorSelectLiquidador(valor_inicial_liquidador);

    //Función para habilitar campos de accionista fallecido
    $('.control-accionista-liquidador').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectLiquidador(valor);
    });


    function comprobarValorSelectLiquidador(variable){
        if(variable == 'si'){
            $('.div-accionista-liquidacion').show();
        }else{
            $('.div-accionista-liquidacion').hide();
        }
    }

    //Comprobamos si es Persona Natural o Persona Jurídica
    var accionista_tipo = $('.tipo-accionista').val();
    getTipoAccionista(accionista_tipo);

    //Función dependiendo del tipo
    function getTipoAccionista(tipo){
        if(tipo == 'natural'){


        }else{

            
        }

    }

});