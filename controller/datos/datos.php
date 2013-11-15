<?php
require_once('model/methods.php');
$objBD = new methods();
//se obtienen todos los dats para el formularío
$ocupaciones= $objBD->getOcupaciones();
$niveles= $objBD->getNivelEstudio();
$estados= $objBD->getEstadoCivil();
//var_dump($ocupaciones);
require_once"view/datos/datos.php";
?>

