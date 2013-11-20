$(document).ready(function() {

    $('#formularioDatos').ajaxForm({
        complete: function(xhr) {
            //si guarda el registro se actualiza el listado de  estudiantes
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
                $('#divRespuestaDatos').html(xhr.responseText);
                $('#divRespuestaDatos').dialog();
            }


        }
    });

    $("#formularioDatos").validate({
        rules: {
            identificacion: {
                required: true,
                number: true
            },
            nombre: {
                required: true
            },
            ocupacion_id: {
                required: true
            },
            nivel_estudio_id: {
                required: true
            },
            aficiones: {
                required: true
            },
            tiempo_libre: {
                required: true
            },
            practica_deporte: {
                required: true
            },
            hijos: {
                required: true
            }, n_hijos: {
                number: true
            },
            estado_civil_id: {
                required: true
            },
            genero: {
                required: true
            }
        }

    });
});


function validar() {
    respuesta = $("#formularioDatos").valid();
    return respuesta;
}

