$(function(){


	$('#select_natural_juridica').change(function(){
		
		var valor = $(this).val();
		if(valor == "Persona Natural"){
			$('#agrega_persona_natural').show();
			$('#agrega_persona_juridica').hide();
		}else if(valor == "Persona Jurídica"){
			$('#agrega_persona_natural').hide();
			$('#agrega_persona_juridica').show();
		}else if(valor == "Mixto"){
			$('#agrega_persona_natural').show();
			$('#agrega_persona_juridica').show();
		}else{			
			$('#agrega_persona_natural').hide();
			$('#agrega_persona_juridica').hide();
		}
	});



	//Agregar por AJAX serie de acciones
	//Publicaciones de los Centros de Estudiantes
	$('.form-persona-natural').on("submit", function(ev){
		ev.preventDefault();
		
			
		var $form = $(this);
		//Para buscar en el formulario un elemento que tenga el type submit
		var $button = $form.find("[type='submit']");
		var $url = $form.attr('action');
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
				//Limpiamos todos los input
				$('input[type="text"]').val('');

				//Cerramos el modal
				$('#myModalJuridica').modal('hide');
				$('#myModalNatural').modal('hide');

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

	
	$('#tipo_accionista').change(function(){
    	var valor = $(this).val();
    	var idCuenta = $(this).attr('idcuenta');
    	if (valor=="menor_edad"){
    		var tipoAccionistaRoute = "/menordeEdad/";
    	}
    	if (valor=="acc_fallecido"){
    		var tipoAccionistaRoute = "/acc_fallecido/";
    	}

    	if (valor=="interdicciones"){
    		var tipoAccionistaRoute = "/interdicciones/";
    	}

    	if (valor=="procedimientos"){
    		var tipoAccionistaRoute = "/procedimientos/";
    	}

    	if (valor==""){
    		var tipoAccionistaRoute = "/accionistas/";
    	}

    	   $.get(""+tipoAccionistaRoute+idCuenta+"",function(response,menores){
    	   		var html='';
    	   		if(response!="Sin data"){
	    			if(Object.keys(response['accionistas']).length > 0){
				  	  
	                  $.each(response['accionistas'], function(i,item){
						  html += '<tr id='+item['CUSTOMMODULE19_ID']+'>'
	                            html += '<td>'+item['Nombres']+" "+item['Apellido Paterno']+" "+item['Apellido Materno']+'</td>'
	                            html += '<td>'+item['Nombre Razón Social']+'</td>'
	                            html += '<td>'+item['RUT/Cédula de Identidad Extranjera']+'</td>'
	                            html += '<td>'+item['Cuenta Asociada']+'</td>'
	                        html += '</tr>';
					    });
	              	}
              	}
              	if(html == '') html = '<tr><td colspan="4">No se encontraron registros..</td></tr>'
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $("#accionistas tbody").html(html); 
                 setTimeout(function(){
		             $("#accionistas tbody tr").click(function() {
						var id = $(this).attr('id');
					    $("#id-"+id+"").css({"display": "block","padding-right": "17px"}); 
				 		$("#id-"+id+"").attr('class','modal fade in');
					});	        
		         },1)
    		});	
	});

	$("#accionistas tbody tr").click(function() {
			 var id = $(this).attr('id');
		     $("#id-"+id+"").css({"display": "block","padding-right": "17px"}); 
 			 $("#id-"+id+"").attr('class','modal fade in');
	 });

	$(".close").click(function() {
			 var id = $(this).attr('ida');
		     $("#id-"+id+"").css({"display": "none"}); 
 			 $("#id-"+id+"").attr('class','modal fade');
 			 $('.porcentaje_acciones').show();
 			 $("#porcentaje-"+id+"").hide();
 			 $('.titulo_acciones').show();
 			 $("#titulo-"+id+"").hide();
 			 $(".folio_registro_acc").show();
 			 $("#folio-"+id+"").css({"display": "none"});
 			 
	 });

	$(".close_tipo_acc").click(function() {
			 var id = $(this).attr('idt');
		     $("#idiacc-"+id+"").css({"display": "none"}); 
 			 $("#idiacc-"+id+"").attr('class','modal fade');
 			 //$('.porcentaje_acciones').show();
 			 //$("#porcentaje-"+id+"").hide();
 			 //$('.titulo_acciones').show();
 			 //$("#titulo-"+id+"").hide();
 			 //$(".folio_registro_acc").show();
 			 //$("#folio-"+id+"").css({"display": "none"});
 			 
	 });


	$('.porcentaje_acciones').click(function(){	
    	var idAccionista = $(this).attr("idaccionista");
    	var  buttom = $(this);
    	   $.get("/porcentaje_acciones/"+idAccionista+"",function(response,acc){
    	   	$("#porcentaje-"+idAccionista+"").css({"display": "block"});

    	   		var html='';
	    			if(Object.keys(response).length > 0){
				  	  
	                  $.each(response['porcentaje'], function(i,item){
	                  			html += '<tr>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                            html += '<td>'+item['% Acciones']+'</td>'
	                        	html += '</tr>';
					    });
	              	}
              	if(html == '') html = '<tr><td colspan="6">No se encontraron registros..</td></tr>'
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $("#pocentaje_acc tbody").html(html); 
              buttom.hide();  
    		});
 
	});

	$('.titulo_acciones').click(function(){	
    	var idAccionista = $(this).attr("idaccionista");
    	
    	var  buttom = $(this);
    	   $.get("/titulo_acciones/"+idAccionista+"",function(response,acc){
    	   	$("#titulo-"+idAccionista+"").css({"display": "block"});

    	   		var html='';
	    			if(Object.keys(response).length > 0){
				  	  
	                  $.each(response['titulos'], function(i,item){
	                  			html += '<tr>'
	                            html += '<td>'+item['No. titulo']+'</td>'
	                            html += '<td>'+item['Vigente o itunilizado']+'</td>'
	                            html += '<td>'+item['No. Acciones']+'</td>'
	                            html += '<td>'+item['Tipo Acciones']+'</td>'
	                            html += '<td>'+item['Fecha suscripción o compra']+'</td>'
	                            html += '<td>'+item['Pagada o No Pagada']+'</td>'
	                        	html += '</tr>';
					    });
	              	}
              	if(html == '') {
              		html = '<tr><td colspan="6">No se encontraron registros..</td></tr>';
              		$("#idt"+idAccionista+"").hide();
              	}
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $("#titulo_acc tbody").html(html); 
              buttom.hide();  
    		});
 
	});

	$('.tipo_titulos').change(function(){
    	var valor = $(this).val();
    	var idCuenta = $(this).attr('idcuenta');
    	if (valor=="inutilizado"){
    		var tipoAccionistaRoute = "/titulos_inutilizados/";
    	}
    	if (valor=="vigente"){
    		var tipoAccionistaRoute = "/titulos_vigentes/";
    	}
    	if (valor==""){
    		var tipoAccionistaRoute = "/titulo_acciones/";
    	}

    	   $.get(""+tipoAccionistaRoute+idCuenta+"",function(response,menores){
    	   		var html='';
	    			if(Object.keys(response).length > 0){
				  	  
	                  $.each(response['titulos'], function(i,item){
	                  			html += '<tr>'
	                            html += '<td>'+item['No. titulo']+'</td>'
	                            html += '<td>'+item['Vigente o itunilizado']+'</td>'
	                            html += '<td>'+item['No. Acciones']+'</td>'
	                            html += '<td>'+item['Tipo Acciones']+'</td>'
	                            html += '<td>'+item['Fecha suscripción o compra']+'</td>'
	                            html += '<td>'+item['Pagada o No Pagada']+'</td>'
	                        	html += '</tr>';
					    });
	              	}
              	if(html == '') html = '<tr><td colspan="4">No se encontraron registros..</td></tr>'
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $("#titulo_acc tbody").html(html); 

    		});	
	});



$('.folio_registro_acc').click(function(){
    	var idAccionista = $(this).attr("idaccionista");
    	var  buttom = $(this);
    	   $.get("/folio_registro/"+idAccionista+"",function(response,menores){
    	   	$("#folio-"+idAccionista+"").css({"display": "block"});
    	   		var html='';
	    			if(Object.keys(response).length > 0){
	                  $.each(response, function(i,item){
	                  			html += '<tr id='+item['CUSTOMMODULE20_ID']+' class="select-tr">'
	                            html += '<td>'+item['Número de folio']+'</td>'
	                            html += '<td>'+item['Fecha']+'</td>'
	                            html += '<td>'+item['Número Acciones suscritas o Compradas']+'</td>'
	                            html += '<td>'+item['Vigentes o Inutilizadas']+'</td>'
	                            html += '<td>'+item['Número acciones Vendidas']+'</td>'
	                            html += '<td>'+item['Saldo Acciones']+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+item['Observaciones']+'</td>'
	                        	html += '</tr>';
					    });
	              	}
              	if(html == '') html = '<tr><td colspan="11">No se encontraron registros..</td></tr>'
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $(".folio_acc tbody").html(html); 
                buttom.hide();
                 setTimeout(function(){
		             	$('.folio_acc tbody tr').click(function(){
						 var id = $(this).attr('id');
				    	   $.get("/folio_registro_accionista/"+id+"",function(response,menores){
				    	   	console.log(response);
				    	   	$("#folio-"+idAccionista+"").css({"display": "block"});
				    	   		var usufructo='';
				    	   		var prenda='';
				    	   		var embargo='';
					    			if(Object.keys(response).length > 0){
					                  $.each(response, function(i,item){
					                  	if(item['Objeto de Usufructo']=="Si"){
					                  			usufructo += '<tr">'
					                            usufructo += '<td>'+item['razon social']+'</td>'
					                            usufructo += '<td>'+item['Título Acciones en Usufructo']+'</td>'
					                            usufructo += '<td>'+item['No. Acciones en Usufructo']+'</td>'
					                            usufructo += '<td>'+item['Fecha Usufructo']+'</td>'
					                            usufructo += '<td>'+item['Con o sin Asignación de Derecho a Voto usufructuar']+'</td>'
					                        	usufructo += '</tr>';
					                  	}
					                  	if(item['Objeto de Prenda']=="Si"){
					                        	prenda += '<tr">'
					                            prenda += '<td>'+item['razon social']+'</td>'
					                            prenda += '<td>'+item['Título Acciones Prendadas']+'</td>'
					                            prenda += '<td>'+item['No. Acciones Prendadas']+'</td>'
					                            prenda += '<td>'+item['Fecha Prenda (Adjunto)']+'</td>'
					                            prenda += '<td>'+item['Con o sin Asignación de Derecho a Dividendo al Acr']+'</td>'
					                            prenda += '<td>'+item['Con o sin Asignación de Derecho a Voto Acreedor']+'</td>'
					                        	prenda += '</tr>';
					                  	}
					             		if(item['Objeto o no de Pacto – Subpacto de Accionistas']=="Si"){
					                        	embargo += '</tr>';
					                        	embargo += '<tr">'
					                            embargo += '<td>'+item['razon social']+'</td>'
					                            embargo += '<td>'+item['Título']+'</td>'
					                            embargo += '<td>'+item['No. Acciones Embargadas o sujetas a Medida Prejudi']+'</td>'
					                            embargo += '<td>'+item['Fecha Embargo o medida precautoria (Adjunto)']+'</td>'
					                            embargo += '<td>'+item['Con o sin Derecho a Dividendo']+'</td>'
					                        	embargo += '</tr>';
					                  	}
					                  			
									    });
					              	}
					              	$("#tipotipo").css({"display": "block","padding-right": "17px"}); 
 			 						$("#tipotipo").attr('class','modal fade in');
					              	if (usufructo != ''){
					              		$("#usufructo").css({"display": "block"});
					              			 $(".usufructo_acc tbody").html(usufructo);
					              	}
					              	if (prenda != ''){
					              		$("#prenda").css({"display": "block"});
					              			 $(".prenda_acc tbody").html(prenda);
					              	}
					              	if (embargo != ''){
					              		$("#embargo").css({"display": "block"});
					              			 $(".embargo_acc tbody").html(embargo);
					              	}	
				    		});
					});        
		         },1)

    		});
	});



	$('.folio_registro').change(function(){
    	var valor = $(this).val();
    	var idAcc = $(this).attr('id_accionista_select');
    	if (valor=="usufructos"){
    		var tipoAccionistaRoute = "/usufructos/";
    	}
    	if (valor=="prenda"){
    		var tipoAccionistaRoute = "/prenda/";
    	}
    	if (valor=="embargo"){
    		var tipoAccionistaRoute = "/embargo/";
    	}
    	if (valor==""){
    		var tipoAccionistaRoute = "/registro_acciones/";
    	}

    	   $.get(""+tipoAccionistaRoute+idAcc+"",function(response,menores){	
    	   		var html='';
	    			if(Object.keys(response).length > 0){
				  	  
	                  $.each(response['registro'], function(i,item){
	                  			html += '<tr id='+item['CUSTOMMODULE20_ID']+' class="select-tr">'
	                            html += '<td>'+item['Número de folio']+'</td>'
	                            html += '<td>'+item['Fecha']+'</td>'
	                            html += '<td>'+item['Número Acciones suscritas o Compradas']+'</td>'
	                            html += '<td>'+item['Vigentes o Inutilizadas']+'</td>'
	                            html += '<td>'+item['Número acciones Vendidas']+'</td>'
	                            html += '<td>'+item['Saldo Acciones']+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+'adjunto'+'</td>'
	                            html += '<td>'+item['Observaciones']+'</td>'
	                        	html += '</tr>';
					    });
	              	}
              	if(html == '') html = '<tr><td colspan="11">No se encontraron registros..</td></tr>'
                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
                $(".folio_acc tbody").html(html); 
                setTimeout(function(){
		             $(".folio_acc tbody tr").click(function() {
						var id = $(this).attr('id');
					    $("#idiacc-"+id+"").css({"display": "block","padding-right": "17px"}); 
				 		$("#idiacc-"+id+"").attr('class','modal fade in');
					});	        
		         },1)   	
    		});
		});

		/*$('.folio_acc tbody tr').click(function(){
		alert ('hola');
	
	    	var idAccionista = $(this).attr("idaccionista");
	    	var  buttom = $(this);
	    	   $.get("/folio_registro/"+idAccionista+"",function(response,menores){
	    	   	$("#folio-"+idAccionista+"").css({"display": "block"});
	    	   		var html='';
		    			if(Object.keys(response).length > 0){
		                  $.each(response, function(i,item){
		                  			html += '<tr id='+item['CUSTOMMODULE20_ID']+' class="select-tr">'
		                            html += '<td>'+item['Número de folio']+'</td>'
		                            html += '<td>'+item['Fecha']+'</td>'
		                            html += '<td>'+item['Número Acciones suscritas o Compradas']+'</td>'
		                            html += '<td>'+item['Vigentes o Inutilizadas']+'</td>'
		                            html += '<td>'+item['Número acciones Vendidas']+'</td>'
		                            html += '<td>'+item['Saldo Acciones']+'</td>'
		                            html += '<td>'+'adjunto'+'</td>'
		                            html += '<td>'+'adjunto'+'</td>'
		                            html += '<td>'+'adjunto'+'</td>'
		                            html += '<td>'+'adjunto'+'</td>'
		                            html += '<td>'+item['Observaciones']+'</td>'
		                        	html += '</tr>';
						    });
		              	}
	              	if(html == '') html = '<tr><td colspan="11">No se encontraron registros..</td></tr>'
	                // añadimos  a nuestra tabla todos los datos encontrados mediante la funcion html
	                $(".folio_acc tbody").html(html); 
	                buttom.hide();
	                 setTimeout(function(){
			             $(".folio_acc tbody tr").click(function() {
							var id = $(this).attr('id');
						    $("#idiacc-"+id+"").css({"display": "block","padding-right": "17px"}); 
					 		$("#idiacc-"+id+"").attr('class','modal fade in');
						});	        
			         },1)

	    		});

		});*/


});

