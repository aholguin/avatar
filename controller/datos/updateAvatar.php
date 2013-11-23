<?php
session_start();
require_once('model/methods.php');
$objBD = new methods();
extract($_REQUEST);
$respuesta = $objBD->setAvatar($_SESSION['idAvatar'],$avatar_id);
if($respuesta)
        echo '1';
else
    echo '0';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
