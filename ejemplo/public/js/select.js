$(function() {
    
    $('#departamento').on('change', provincia);
    $('#provincia').on('change', distrito);

});



function provincia() {
    var id_departamento = $(this).val();
    //alert(id_estado);
    if (!id_departamento) {
        $('#provincia').html('<option selected value="">SELECCIONE UNA OPCIÓN</option>');
    }
    //ajax
    $.get('/api/Provincia/' + id_departamento, function(data) {
        //console.log(data);
        var html_select = '<option selected value="">SELECCIONE UNA OPCIÓN</option>';
        if (data == "" || data == null) {
            $('#provincia').html('<option selected value="">SELECCIONE UNA OPCIÓN</option>');
        } else {
            for (var i = 0; i < data.length; i++) {

                html_select += '<option  value="' + data[i].id + '">' + data[i].descripcion + '</option>';
                //console.log(html_select);
                $('#provincia').html(html_select);

            }
        }
    });
}


function distrito() {
    var id_provincia = $(this).val();
    //alert(id_estado);
    if (!id_provincia) {
        $('#distrito').html('<option selected value="">SELECCIONE UNA OPCIÓN</option>');
    }
    //ajax
    $.get('/api/Distrito/' + id_provincia, function(data) {
        //console.log(data);
        var html_select = '<option selected value="">SELECCIONE UNA OPCIÓN</option>';
        if (data == "" || data == null) {
            $('#distrito').html('<option selected value="">SELECCIONE UNA OPCIÓN</option>');
        } else {
            for (var i = 0; i < data.length; i++) {

                html_select += '<option  value="' + data[i].id + '">' + data[i].descripcion + '</option>';
                //console.log(html_select);
                $('#distrito').html(html_select);

            }
        }
    });
}
