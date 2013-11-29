$(function() {
    $('#botonEscenario1').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false',
            'escenario': '1'
        });
    });

    $('#botonEscenario2').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false',
            'escenario': '2'
        });
    });

    $('#botonEscenario3').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false',
            'escenario': '3'
        });
    });

    $('#botonEscenario4').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/avatar/avatar.php',
            'content': 'false'
        });
    });
});


