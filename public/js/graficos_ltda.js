$(document).ready(function(){
    alert('cargo el JS');
    $('#capital').click('click',function() {
        var id = $(this).attr('idcuenta');
        var $button = $(this);
        alert('cargo');
        graficaSegunCapital(id,$button);
    });
    $('#voto').click('click',function() {
        var id = $(this).attr('idcuenta');
        var $button = $(this);
        graficaSegunVoto(id,$button);
    });

    $('#utilidades').click('click',function() {
        var id = $(this).attr('idcuenta');
        var $button = $(this);
        graficaSegunUtilidad(id,$button);
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

/*
function graficaSegunVoto(id,$button){

    $.ajax({
            url: "/graficasegunvoto/"+id,
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
                console.log(Result);
                $.each(Result['convoto'], function(i,item){
                    var serie = new Array(item['Nombre o Razón social Accionistas'],parseInt(item['Porcentaje Total de Acciones emitidas con Derecho']));
                    data.push(serie);
                });
                graficaVoto(data);
                //$('#myModalAlertAccionesAccionista').modal('show');
                //$button.val("Guardar");
            },
            error: function(err){
               $button.html("Hubo un Error...");
            },
        });
}


function graficaSegunUtilidad(id,$button){

    $.ajax({
            url: "/graficasegunutilidad/"+id,
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
                console.log(Result);
                $.each(Result['dividendos'], function(i,item){
                    var serie = new Array(item['Nombre o Razón social Accionistas'],parseInt(item['Porcentaje de Derecho a Dividendo']));
                    data.push(serie);
                });
                graficaUtilidades(data);
                //$('#myModalAlertAccionesAccionista').modal('show');
                //$button.val("Guardar");
            },
            error: function(err){
               $button.html("Hubo un Error...");
            },
        });
}
  
*/

function graficaCapital(series){

    $('#graficoCapital').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Composición Accionaria % Capital'
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
/*

function graficaVoto(series){

    $('#graficoVoto').highcharts({
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Composición Accionaria % Voto'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Votos',
        colorByPoint: true,
        data: series
    }]
});
}


function graficaUtilidades(series){

    $('#graficoUtilidades').highcharts({
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45,
            beta: 0
        }
    },
    title: {
        text: 'Composición Accionaria % Utilidad'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            depth: 35,
            dataLabels: {
                enabled: true,
                format: '{point.name}'
            }
        }
    },
    series: [{
        type: 'pie',
        name: 'Utilidad',
        data: series
    }]
});
*/
}