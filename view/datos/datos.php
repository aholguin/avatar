

<script type="text/javascript" src="view/datos/datos.js"></script>
<link rel="stylesheet" href="view/datos/anima-2.css" />



<div id="contenido" class="container_12">


    <div class="fondo1"></div>

    <div id="objeto-1r"></div>

    <div id="objeto-3r"></div>

    <div class="boton-1r"></div>

    <div id="logo-pie"></div>

    <div id="aviso-2"></div>

    <div id="aform">

        <form class="formulario-1" id="" action="" method="" onsubmit="">

            <div>
                <label>Nombre</label>
                <input class="campo" type="text" value=""  /> 
            </div>

            <div>
                <label>Identificación</label>
                <input class="campo" type="text" value=""  /> 
            </div>


            <div>  
                <label> Ocupación actual</label>
                <select class="lista-1" name="ocupacion">
                    <?PHP
                    foreach ($ocupaciones as $key => $ocupacion) {
                        echo "<option value='{$ocupacion['id']}]'>{$ocupacion['nombre']}</option>";
                    }
                    ?>

                </select> 
            </div> 

            <div>
                <label>Nivel educativo de la madre</label>
                <select class="lista-1" name="lista-uno">
                    <?PHP
                    foreach ($niveles as $key => $nivel) {
                        echo "<option value='{$nivel['id']}]'>{$nivel['nombre']}</option>";
                    }
                    ?>
                </select> 
            </div>   

            <div>  
                <label>Qué aficiones tiene</label>
                <textarea class="text-area1"></textarea> 
            </div> 

            <div>  
                <label>Cómo ocupa su tiempo libre</label>
                <textarea class="text-area1"></textarea>
            </div> 

            <div>
                <label>Práctica algún deporte</label>
                <span>Si</span><input class="campo-2" name="deporte" type="radio" />
                <span>No</span><input class="campo-2" name="deporte" type="radio" />
                <span>Cuales:</span><textarea class="text-area1"></textarea>
            </div> 

            <div>      
                <label>Tiene hijos</label>
                <span>Si</span><input type="radio" name="hijos" />
                <span>No</span><input type="radio" name="hijos" />
                <span>Cuantos:</span><textarea class="text-area1"></textarea> 
            </div>

            <div>  
                <label>Estado Civil</label>  
                <select class="lista-1" name="lista-tres">
                    <?PHP
                    foreach ($estados as $key => $estado) {
                        echo "<option value='{$estado['id']}]'>{$estado['nombre']}</option>";
                    }
                    ?>
                </select>
            </div> 

            <div>  
                <label>Sexo</label>  
                <select class="lista-1" name="lista-tres">
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>
            </div>    

            <div class="clear"></div>
            <a href="#" id="botonGuardarDatos">Guardar</a>
    </form>


</div>



</div>