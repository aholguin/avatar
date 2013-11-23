$(function() {
    $('#botonEscenario1').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false'
        });
    });

    $('#botonEscenario2').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false'
        });
    });

    $('#botonEscenario3').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/formularioGeneral.php',
            'content': 'false'
        });
    });
});


