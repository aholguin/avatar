

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
        <form class="formulario-1" action="direc.php" id="formularioDatos" method="post" onSubmit = "return validar(this)">
            <input type="hidden" value="controller/datos/saveDatos.php" name="url"/>
            <input type="hidden" value="false" name="content"/>
            <div>
                <label>Nombre</label>
                <input name="nombre" class="campo" type="text" value=""  /> 
            </div>

            <div>
                <label>Identificación</label>
                <input name="identificacion" id="identificacion" class="campo" type="text" value=""  /> 
            </div>


            <div>  
                <label> Ocupación actual</label>
                <select class="lista-1" name="ocupacion_id">
                    <?PHP
                    foreach ($ocupaciones as $key => $ocupacion) {
                        echo "<option value='{$ocupacion['id']}'>{$ocupacion['nombre']}</option>";
                    }
                    ?>

                </select> 
            </div> 

            <div>
                <label>Nivel educativo de la madre</label>
                <select class="lista-1" name="nivel_estudio_id">
                    <?PHP
                    foreach ($niveles as $key => $nivel) {
                        echo "<option value='{$nivel['id']}'>{$nivel['nombre']}</option>";
                    }
                    ?>
                </select> 
            </div>   

            <div>  
                <label>Qué aficiones tiene</label>
                <textarea class="text-area1" name="aficiones"></textarea> 
            </div> 

            <div>  
                <label>Cómo ocupa su tiempo libre</label>
                <textarea class="text-area1" name="tiempo_libre"></textarea>
            </div> 

            <div>
                <label>Práctica algún deporte</label>
                <span>Si</span><input class="campo-2" name="practica_deporte" type="radio" value="1"/>
                <span>No</span><input class="campo-2" name="practica_deporte" type="radio" value="0" />
                <span>Cuales:</span><textarea class="text-area1" name="Deportes"></textarea>
            </div> 

            <div>      
                <label>Tiene hijos</label>
                <span>Si</span><input type="radio" name="hijos" value="1" />
                <span>No</span><input type="radio" name="hijos" value="0" />
                <span>Cuantos:</span><textarea class="text-area1" name="n_hijos" id="n_hijos"></textarea> 
            </div>

            <div>  
                <label>Estado Civil</label>  
                <select class="lista-1" name="estado_civil_id">
                    <?PHP
                    foreach ($estados as $key => $estado) {
                        echo "<option value='{$estado['id']}'>{$estado['nombre']}</option>";
                    }
                    ?>
                </select>
            </div> 

            <div>  
                <label>Sexo</label>  
                <select class="lista-1" name="genero">
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>    

            <div class="clear"></div>
            <input type="submit" id="botonGuardarDatos" value="Guardar Información" id="botonGuardar">
        </form>


    </div>

    <div id="divRespuestaDatos"></div>

</div>
