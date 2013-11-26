<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//se traen las preguntas
require_once('model/methods.php');
$objBD = new methods();
extract($_REQUEST);
$preguntas = $objBD->getPreguntas($escenario);
require_once 'view/escenario/formularioGeneral.php';
?>
