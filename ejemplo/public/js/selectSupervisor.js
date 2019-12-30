$(function() {
    
    $('#vendedores').on('change', Supervisor);

});



function vendedores() {
    var id_supervisors = $(this).val();
    //alert(id_estado);
    if (!id_supervisors) {
        $('#vendedores').html('<input selected value="">SELECCIONE UNA OPCIÓN</input>');
    }
    //ajax
    $.get('/api/Supervisor/' + id_supervisors, function(data) {
        //console.log(data);
        var html_select = 'name="{{ $supervisor->id }}" placeholder="{{ $supervisor->nombres}}"';
        if (data == "" || data == null) {
            $('#vendedores').htmlname="{{ $supervisor->id }}" placeholder="{{ $supervisor->nombres}}"
        } else {
            for (var i = 0; i < data.length; i++) {

                html_select += '<option  value="' + data[i].id + '">' + data[i].nombre + '</option>';
                //console.log(html_select);
                $('#vendedores').html(html_select);

            }
        }
    });
}



