$(document).ready(function() {
    $('#botonIniciar').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/datos/datos.php',
            'content': 'false'
        });
    });

});

