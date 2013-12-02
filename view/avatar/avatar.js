$(function() {
    $('.rs-slider').refineSlide({
        transition: 'cubeH',
        useThumbs: false,
        useArrows: true,
        maxWidth: 850, // set to native image width (px)
        onInit: function() {
            $('#avatarSeleccionado').val($(this.slider.$currentSlide).attr("id"));
            console.log($(this.slider.$currentSlide).attr("id"));
        },
        afterChange: function() {
            $('#avatarSeleccionado').val($(this.slider.$currentSlide).attr("id"));
            console.log($(this.slider.$currentSlide).attr("id"));
        }
    });

    $('#botonSelectAvatar').button();
    $('#botonSelectAvatar').click(function() {
        //guarda el avatar seleccionado
        $.ajax({
            type: "POST",
            url: 'direc.php',
            data: {
                'url': 'controller/datos/updateAvatar.php',
                'avatar_id': $('#avatarSeleccionado').val(),
                'content': 'false'
            },
            success: function(a) {
                if (a == '1') {
                    $("#contenido").load(
                            'direc.php', {
                        'url': 'controller/escenario/seleccionar.php',
                        'content': 'false'
                    });
                } else {
                    alert(a);
                }

            }
        });
    });
});


