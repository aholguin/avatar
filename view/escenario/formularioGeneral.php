<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="view/escenario/formularioGeneral.js"></script>

<a href="#" id="botonVoverSeleccionar">Regresar</a>
<div id="accordionPreguntas">


    <?php
    switch ($escenario) {
        case 1: { // Para las preguntas de seleccion multiple
                $preguntaActual = 0;
                //echo "<div><p>";
                foreach ($preguntas as $key => $pregunta) {
                    if ($preguntaActual != $pregunta['p_id']) {// si cambia de pregunta nueva pestaña
                        if ($preguntaActual > 0)
                            echo "</p></div>";
                        echo "<h3>{$pregunta['nombre_pregunta']}</h3>";
                        echo "<div><p>";
                        $preguntaActual = $pregunta['p_id'];
                    }
                    // aqui contenido de la pregunta
                    echo "<input type='checkbox' class='respuestasCheck' name='p_{$pregunta['p_id']}' value='{$pregunta['p_id']}_{$pregunta['p_id']}'>".$pregunta['nombre_respuesta'] . " - " . $pregunta['descripcion_general_respuesta']. "<br>";
                }
                echo "</p></div>";
            }
            break;
        case 2: { // pra preguntas de calificación
                foreach ($preguntas as $key => $pregunta) {
                    echo "<h3>{$pregunta['nombre_pregunta']}</h3>";
                    ?>
                    <div>
                        <p>
                            <?php
                            echo "{$pregunta['descripcion_general']}";
                            ?>
                            <br> PUNTAJE<input type="text" class='respuestasText/> 
                        </p>
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
<?php ?>