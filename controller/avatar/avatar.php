<?php

session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//traer el genero
require_once('model/methods.php');
$objBD = new methods();
$genero = $objBD->getDatosUsario($_SESSION['idAvatar']);
$arrayAvatares = $objBD->getAvatares($genero[0]['genero']);
//echo '<pre>';var_dump($arrayAvatares);echo '</pre>';
require_once"view/avatar/avatar.php";
?>
