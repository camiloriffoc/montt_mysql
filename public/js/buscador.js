$(document).ready(function () {
    (function ($) {
                $('#filtrar').keyup(function () {
 					$("#buscar_aca #close-open").css({"display": "none"});
 					$("#lista_filtro").attr('class','treeview');
                    var rex = new RegExp($(this).val(), 'i');
					
                    $('#buscar_aca #lista_filtro').hide();
                    $('#buscar_aca #lista_filtro').filter(function () {
                        return rex.test($(this).text());
                    }).show();
 
                })
 
            }(jQuery));
 
});