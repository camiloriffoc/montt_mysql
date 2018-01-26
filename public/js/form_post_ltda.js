$(document).ready(function(){

    $('#capital').click('click',function() {
        var id = $(this).attr('idcuenta');
        var $button = $(this);
        graficaSegunCapital(id,$button);
    });

    $('#dividendos').click('click',function() {
        var id = $(this).attr('idcuenta');
        var $button = $(this);
        graficaSegunDividendos(id,$button);
    });

	$('#myAlertModal').modal('hide');
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
            dataType: "json",
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
                $('#addSocioNatural').modal('hide');
                $('#addSocioJuridica').modal('hide');
                $('#addAdministrador').modal('hide');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
            },
            error: function(err){
                console.log('Error',err);
                if(err.iden == "Limpiar"){
                    $form.find('input[type="text"]').val('');
                }
                $('#myModalAccionistaFallecido').modal('hide');
                $('#myModalAccionistaInterdiccion').modal('hide');
                $('#myModalAccionistaMenores').modal('hide');
                $('#addSocioNatural').modal('hide');
                $('#addSocioJuridica').modal('hide');
                $('#addAdministrador').modal('hide');
                $('#myAlertModal').modal('show');
                $button.val("Guardar");
               
            },
        });

        return false;
    });


    //Apertura de tablas por los socios
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

    $('#ver_socio_fallecido').on('click',function(e){
        e.preventDefault();
        $('#myModalAccionistaFallecido').modal('show');
    });

    $('#ver_socio_interdiccion').on('click',function(e){
        e.preventDefault();
        $('#myModalAccionistaInterdiccion').modal('show');
    });

    $('#ver_socio_menor_edad').on('click',function(e){
        e.preventDefault();
            $('#myModalAccionistaMenores').modal('show');
    });


});

function graficaSegunCapital(id,$button){

    $.ajax({
        url: "/grafico_segun_capital/"+id,
        method: "GET",
        data: "{}",
        dataType: "JSON",
        processData: false,
        contentType: false,

        beforeSend: function(){
            $button.html('Procesando...');
        },
            //El servidor responde y todo sale bien
            success: function(Result){
                $button.css({"display": "none"}); 
                var data = []
                $.each(Result['sobre_capital'], function(i,item){
                    var serie = new Array(item['Nombre o Razón social de los Socios'],parseInt(item['Capital aportado']));
                    data.push(serie);
                });
                graficaCapital(data);
                //$('#myModalAlertAccionesAccionista').modal('show');
                //$button.val("Guardar");
            },
            error: function(err){
               $button.html("Hubo un Error...");
           },
       });
}

function graficaCapital(series){

    $('#graficoCapital').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Sobre Capital'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Capital',
            colorByPoint: true,
            data: series
        }]
    });
}

function graficaSegunDividendos(id,$button){

    $.ajax({
        url: "/grafico_segun_dividendos/"+id,
        method: "GET",
        data: "{}",
        dataType: "JSON",
        processData: false,
        contentType: false,

        beforeSend: function(){
            $button.html('Procesando...');
        },
            //El servidor responde y todo sale bien
            success: function(Result){
                $button.css({"display": "none"}); 
                var data = []
                $.each(Result['sobre_dividendos'], function(i,item){
                    var serie = new Array(item['Nombre o Razón social de los Socios'],parseInt(item['Capital aportado']));
                    data.push(serie);
                });
                graficaDividendos(data);
                //$('#myModalAlertAccionesAccionista').modal('show');
                //$button.val("Guardar");
            },
            error: function(err){
               $button.html("Hubo un Error...");
           },
       });
}

function graficaDividendos(series){

    $('#graficoDividendos').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Sobre Dividendos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Dividendo',
            colorByPoint: true,
            data: series
        }]
    });
}