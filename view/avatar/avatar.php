<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="view/avatar/avatar.js"></script>
<link rel="stylesheet" href="view/avatar/avatar.css" />
<div class="grid_12" align="center" id="slider-mod"><div class="bund">
    <ul class="rs-slider">
        <?php
        foreach ($arrayAvatares as $key => $avatar) {
            #var_dump($avatar);
            echo  " <li id='{$avatar['id']}'><img src='view/avatar/imagenes/{$avatar['ruta']}' alt='' /></li>";
        }
        ?>
    </ul>
    <input type="hidden" value="" id="avatarSeleccionado"/>
    <a href="#" id="botonSelectAvatar">Seleccionar</a></div>
</div>
