//Funcion para agregar por AJAX un nuevo pacto de accionista
	$('.add-subpacto-accionista-ajax').on("submit", function(ev){
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
            	$('#myModalAddSubPactoAccionista').modal('hide');
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

    //Funcion para EDITAR por AJAX subpactos
    $('.update-subpacto-accionista-ajax').on("submit", function(ev){

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
                $('#principalPanel').empty().append($(data));
            	$('html, body').animate({scrollTop:0}, 'slow');
                $('.modal-body').html('<p>Registro Editado</p>');
                $('#myAlertModal').modal('show');               

            },
            error: function(err){
                console.log('Error',err);
                $('.modal-body').html('<p>'+err+'</p>');
                $('#myAlertModal').modal('show');
            },
        });

        return false;
    });

    //Función para eliminar accionista
    $('.delete-subpacto-accionista').on('click',function(){
    	var $row = $(this).parents('tr');
    	var $id = $row.data('id');
    	var $form = $('#form-delete-subpacto-accionista');
    	var $url = $form.attr('action').replace(':SUBPACTO_ID',$id);
    	var $data = $('#form-delete-subpacto-accionista');
        var $formData = new FormData($data);

        if (confirm("Esta seguro que desea eliminar")) {
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
    	}

    });

