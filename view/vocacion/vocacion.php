<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//echo '<pre>';
//var_dump($avatar);
//echo '</pre>';
?>
<script type="text/javascript" src="view/vocacion/vocacion.js"></script>
<link rel="stylesheet" href="view/vocacion/vocacion.css" />

<div class="grid_12" align="center" id="vocaCont">

    <div class="bannerVocacion"></div>
    <div class="vocaAvatar">
        <img src="view/vocacion/imagenes/<?php echo $avatar[0]['rutaActivo'] ?>"/>
    </div>
    
    <a href="#" id="botonVoverSeleccionar"><img src="view/vocacion/imagenes/botonRegresar.png" /></a>
    
    <div class="bg"></div>
    
    <div class="resultado"><h3>Su Vocación es: Ingeniería Biomédica</h3></div>
    
    
</div>    