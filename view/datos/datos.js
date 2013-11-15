$(document).ready(function() {
    $('#botonGuardarDatos').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/avatar/avatar.php',
            'content': 'false'
        });
    });
});


