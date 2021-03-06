$(document).ready(function(){
    $("#resultado").hide(); 

	$(document).on('click','.menu-cuentas',function(event){
		event.preventDefault();
		var url = $(this).attr("href");
        ajaxRenderSection(url);
    })

	function ajaxRenderSection(url) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'json',
            beforeSend: function () {
                        $('#principalPanel').empty();
                        $("#resultado").show();
                },
            success: function (data) {
                $('#principalPanel').empty().append($(data));
                $("#resultado").hide(); 
            },
            error: function (data) {
                var errors = data.responseJSON;
                if (errors) {
                    $.each(errors, function (i) {
                        alert(errors[i]);

                    });
                }
            }
        });
    }
});
