//Funcion para agregar por AJAX un nuevo pacto de accionista
	$('.add-folio-registro-accionista-ajax').on("submit", function(ev){
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
            	$('#myModalAddFolioAccionista').modal('hide');
                $button.val("Cargando...");
            },
            //El servidor responde y todo sale bien
            success: function(data){
            	if(data.iden == "Limpiar"){
            		$form.find('input[type="text"]').val('');
            		$form.find('input[type="number"]').val('');
            	}
            	
            	$('#myAlertModal .modal-body').html('<p> Creada con éxito</p>');
                $('#myAlertModal').modal('show');
                $('#principalPanel').empty().append($(data));
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                $('.modal-body').html('<p>'+err+'</p>');
                $('#myAlertModal').modal('show');
            },
        });

        return false;
    });

     //Funcion para EDITAR por AJAX un % de acciones de accionista
    $('.update-folio-registro-accionista-ajax').on("submit", function(ev){

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
                $('.modal-body').html('<p>Editado con éxito</p>');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log('Error',err);
                $('.modal-body').html('<p>'+err+'</p>');
                $('#myAlertModal').modal('show');
            },
        });

        return false;
    });


    //Comprobamos el valor inicial del select Usufructo

    var valor_inicial_usufructo_select = $('.control-accionista-usufructo').val();
    comprobarValorSelectUsufructo(valor_inicial_usufructo_select);

    //Función para habilitar campos de accionista fallecido
    $('.control-accionista-usufructo').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectUsufructo(valor);
    });


    function comprobarValorSelectUsufructo(variable){
        if(variable == 'si'){
            $('.div-accionista-usufructo').show();
        }else{
            $('.div-accionista-usufructo').hide();
        }
    }

    //Comprobamos el valor inicial del select prenda
    var valor_inicial_prenda_select = $('.control-accionista-prenda').val();
    comprobarValorSelectPrenda(valor_inicial_prenda_select);

    //Función para habilitar campos de accionista prenda
    $('.control-accionista-prenda').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectPrenda(valor);
    });


    function comprobarValorSelectPrenda(variable){
        if(variable == 'si'){
            $('.div-accionista-prenda').show();
        }else{
            $('.div-accionista-prenda').hide();
        }
    }

    //Comprobamos el valor inicial del select embargo
    var valor_inicial_embargo_select = $('.control-accionista-embargo').val();
    comprobarValorSelectEmbargo(valor_inicial_embargo_select);

    //Función para habilitar campos de accionista embargo
    $('.control-accionista-embargo').on('change',function(){
        var valor = $(this).val();
        comprobarValorSelectEmbargo(valor);
    });


    function comprobarValorSelectEmbargo(variable){
        if(variable == 'si'){
            $('.div-accionista-embargo').show();
        }else{
            $('.div-accionista-embargo').hide();
        }
    }
