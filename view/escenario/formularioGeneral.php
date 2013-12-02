<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="view/escenario/formularioGeneral.js"></script>
<link rel="stylesheet" href="view/escenario/estilos-escenario.css" />


<div id="bgForm-gral">

    <div class="bannerHabilida">
        <?php
        if ($preguntas[0]['escenario_id'] == 1) { //para el escenario de preferencias
            echo '<img src="view/escenario/imagenes/bannerPreferencias.png"/>';
        } else if ($preguntas[0]['escenario_id'] == 2) { //para el escenario de habilidades
            echo '<img src="view/escenario/imagenes/bannerHabilidades.png"/>';
        }
        ?>
    </div>

    <a href="#" id="botonVoverSeleccionar"></a>

    <div id="accordionPreguntas">

        <?php
        switch ($escenario) {
            case 1: { // Para las preguntas de seleccion multiple
                    $preguntaActual = 0;
                    //echo "<div><p>";
                    foreach ($preguntas as $key => $pregunta) {
                        if ($preguntaActual != $pregunta['p_id']) {// si cambia de pregunta nueva pestaña
                            if ($preguntaActual > 0)
                                echo "</div></div>";
                            echo "<h3>{$pregunta['nombre_pregunta']}</h3>";
                            echo "<div><div class='campoPrecas'>";
                            $preguntaActual = $pregunta['p_id'];
                        }
                        // aqui contenido de la pregunta
                        echo "<div class='checkbox-1'><input type='checkbox' class='respuestasCheck' name='p_{$pregunta['p_id']}' value='{$pregunta['p_id']}_{$pregunta['p_id']}'><label for='campo1'></label></div><div class'Pregunta1'>" . $pregunta['nombre_respuesta'] ."</div><div class'Pregunta2'>". $pregunta['descripcion_general_respuesta']."</div><div class='clear'></div>";
                    }
                    echo "</div></div>";
                }
                break;
            case 2: { // pra preguntas de calificación
                    foreach ($preguntas as $key => $pregunta) {
                        echo "<h3>{$pregunta['nombre_pregunta']}</h3>";
                        ?>
                        <div>
                            <div class="campoPre">
                                <?php
                                echo "{$pregunta['descripcion_general']}";
                                ?>
                            </div>
<<<<<<< HEAD
                            <div class="campoCasedos"><img src="view/escenario/imagenes/icon1.png" /> 
                            Puntaje<input type="text" class='respuestasText'/></div> 
=======
                            <div class="campoCasedos"><img src="view/escenario/imagenes/<?PHP echo $pregunta['imagen'];?>" /> 
                                Puntaje<input type="text" class='respuestasText' size="2"/></div> 
>>>>>>> 29cccbcd76920a684c16ed0cb87048e654c34819

                        </div>
                        <?php
                    }
                }
                break;

            default:
                break;
        }
        ?>


    </div>
</div>
<?php ?>