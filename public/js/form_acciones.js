$(document).ready(function(){
	$('#form_agregar_serie').hide();
	$('#series_y_preferencias').hide();
	$('#serie_accion_id').val('');
	$('#cantidad_accion_id').val('');

	var valor_entrada = $('#select_id_serie_unica_varia').val();
	//alert(valor_entrada)
	if(valor_entrada == 'Varias Series'){
		$('#form_agregar_serie').show();
	    $('#series_y_preferencias').show();
	};


	//Cargamos los select (valores de input)
	var serie_unica = $('#select_id_serie_unica_varia').val();
	$('#select_serie_accciones').val(serie_unica);

	var valor_nominal = $('#select_id_valor_nominal').val();
	$('#select_valor_nominal').val(valor_nominal);

	var derecho_dividendos = $('#select_id_derecho_dividendos').val();
	$('#select_derecho_dividendos').val(derecho_dividendos);

	var derecho_voto = $('#select_id_derecho_voto').val();
	$('#select_derecho_voto').val(derecho_voto);
	
	//Método par ocultar boton agregar series
	$('#select_serie_accciones').on('change',function(){
	    var valor = $(this).val();
	    if(valor == 'Serie Única'){
	    	$('#form_agregar_serie').hide();
	    	$('#series_y_preferencias').hide();

	    }else if(valor == 'Varias Series'){
	    	$('#form_agregar_serie').show();
	    	$('#series_y_preferencias').show();
	    }else{
	    	$('#form_agregar_serie').hide();
	    	$('#series_y_preferencias').hide();
	    }
	    
	});

	
	//Agregar por AJAX serie de acciones
	//Publicaciones de los Centros de Estudiantes
	$('.add-serie').on("submit", function(ev){
		ev.preventDefault();

		var $form = $(this);
		//Para buscar en el formulario un elemento que tenga el type submit
		var $button = $form.find("[type='submit']");

		//Petición AJAX
		$.ajax({
			url: '/crear_serie_acciones',
			method: $form.attr("method"),
			data: $form.serialize(),
			dataType: "JSON",
			//Se ejecuta antes que la petición inicie
			beforeSend: function(){
				$button.val("Cargando...");
			},
			//El servidor responde y todo sale bien
			success: function(data){
				$('#serie_input').val('');
				$('#cantidad_input').val('');
				$('#mensaje_respuesta').html("Creado con éxito");

				$button.val("Crear");
				

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

	$('#myModalAlertAcciones').modal('hide');
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
            	
                $('#myModalAlertAcciones').modal('show');
                $button.val("Guardar");
                

            },
            error: function(err){
                console.log(err)
                $button.val("Hubo un Error...");
            },
        });

        return false;
    });
	

});
