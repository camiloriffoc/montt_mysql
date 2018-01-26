$(document).ready(function(){

    

    $('#select_procedimiento_juridica').change(function(){
        var valor = $(this).val();
        if(valor == 'Si'){

            $('#myModalAccionistaProcedimiento').modal('show');
        }
    })

    $('#select_accionista_fallecido').change(function(){
        var valor = $(this).val();
        if(valor == 'Si'){

            $('#myModalAccionistaFallecido').modal('show');
        }
    });

    $('#select_accionista_interdiccion').change(function(){
        var valor = $(this).val();
        if(valor == 'Si'){

            $('#myModalAccionistaInterdiccion').modal('show');
        }
    });

    $('#select_accionista_menor_edad').change(function(){
        var valor = $(this).val();
        if(valor == 'Si'){

            $('#myModalAccionistaMenores').modal('show');
        }
    });

    $('#select_accionista_procedimiento').change(function(){
        var valor = $(this).val();
        if(valor == 'Si'){

            $('#myModalAccionistaProcedimiento').modal('show');
        }
    });
    
    //Autoselect Registro Accionista
    var input_asig_voto = $('#id_select_asig_voto').val();
    

    if(input_asig_voto == 'Si'){
        
        $('#select_asig_voto').val("Si");
    }else if(input_asig_voto == 'No'){
        
        $('#select_asig_voto').val("No");
    }else{
        
        $('#select_asig_voto').val('');
    };

    $('#myModalAlertAccionista').modal('hide');
    //Agregar por AJAX capital social
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
            	$('#myModalAccionistaFallecido').modal('hide');
                $('#myModalAccionistaInterdiccion').modal('hide');
                $('#myModalAccionistaMenores').modal('hide');
                $('#myModalAccionistaProcedimiento').modal('hide');

                $('#myModalAlertAccionista').modal('show');
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
