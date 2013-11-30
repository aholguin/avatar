<?php
session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('model/methods.php');
$objBD = new methods();
$usuario = $objBD->getDatosUsario($_SESSION['idAvatar']);
$avatar = $objBD->getAvatar($usuario[0]['avatar_id']);
require_once 'view/vocacion/vocacion.php';
?>
