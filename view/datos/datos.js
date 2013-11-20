function validar() {
    // se deshabilita acordion para evitar conflicto de validación
//    if (respuesta)
//        //crearAjaxForm();
//        return respuesta;
}


$(document).ready(function() {

    $('#formularioDatos').ajaxForm({
        complete: function(xhr) {
            //si guarda el registro se actualiza el listado de  estudiantes
            //
            if (xhr.responseText == '1') {
//                alert('llega');
                $("#contenido").load(
                        'direc.php', {
                    'url': 'controller/avatar/avatar.php',
                    'content': 'false'
                });
            }
            else {
//                alert('no llega');
                $('#contenido').html(xhr.responseText);
            }


        }
    });
//    $('#botonGuardarDatos').click(function() {
//        $("#contenido").load(
//                'direc.php', {
//            'url': 'controller/avatar/avatar.php',
//            'content': 'false'
//        });
//    });
});


