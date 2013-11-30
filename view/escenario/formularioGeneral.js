/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(function() {
    $('#botonVoverSeleccionar').button();
    $('#botonVoverSeleccionar').click(function() {
        $("#contenido").load(
                'direc.php', {
            'url': 'controller/escenario/seleccionar.php',
            'content': 'false'
        });
    });

    $("#accordionPreguntas").accordion({
        icons: null
    });
    //opciones para guardar

    $(".respuestasCheck").click(function() {
        console.log('guarda');
    });

    $(".respuestasText").keydown(function() {
        console.log('guarda texto');
    });

});
