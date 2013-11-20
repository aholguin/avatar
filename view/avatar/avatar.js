$(function() {
    $('.rs-slider').refineSlide({
        transition: 'cubeH',
        useThumbs: false,
        useArrows: true,
        maxWidth: 850 // set to native image width (px)
    });

    $('#botonSelectAvatar').button();
    $('#botonSelectAvatar').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/seleccionar.php',
            'content': 'false'
        });
    });
});


