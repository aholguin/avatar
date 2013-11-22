<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript" src="view/avatar/avatar.js"></script>
<div class="grid_12" align="center">
    <ul class="rs-slider">
        <?php
        foreach ($arrayAvatares as $key => $avatar) {
            #var_dump($avatar);
              " <li><img src='view/avatar/imagenes/{$avatar['ruta']}' alt='' /></li>";
        }
        ?>
    </ul>
    <a href="#" id="botonSelectAvatar">Seleccionar</a>
</div>
