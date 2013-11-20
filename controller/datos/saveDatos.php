<?php

require_once('model/methods.php');
$objBD = new methods();

extract($_REQUEST);

if ($hijos == 0)
    $n_hijos = 0;
$respuesta = $objBD->insertUsuario($identificacion, $nombre, $aficiones, $tiempo_libre, $practica_deporte, $Deportes, $n_hijos, $nivel_estudio_id, $estado_civil_id, $ocupacion_id, 1, $genero, 'NULL');

if ($respuesta)
    echo '1';
else
    echo '¡Conflicto al almacenar por favor intentar mas tarde!';
//echo "<pre>";
//var_dump($_REQUEST);
//echo "</pre>";
?>
