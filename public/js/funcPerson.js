var routes = new Routes();

function Routes() {

    this.showView= function (route,obj) {
        if(obj==undefined)  $("#content").fadeOut(500,function () {
            $("#loader").fadeIn(200,function () {
                var jqxhr = $.get(route,function(resul){
                    $("#loader").fadeOut(1200,function () {
                        if(typeof resul=="string") $("#content").html(resul).fadeIn(1500);
                    });//CIEERE PARA DESPUES QUE HACE LA OPERACION AJAX MUESTRE LOS RESULTADOS
                });

                jqxhr.fail(function(resul) {
                    $("body").html(resul.responseText);
                });

            });//CIERRE DESPUES QUE CARGA EL PRELODER
        })/*//CIERRE DE CUANDO SE OCULTA EL CONTENIDO PRINCIPAL*/

        if(obj!=undefined) var jqxhr = $.get(ruta,function(resul){nroRegistros(resul); });
    }


}