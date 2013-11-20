<?php
session_start();
/*  @descrición   Controlador del principal
 *  @autor        Anderson Holguin Avila
 *  @version      1.0   
 */
// Incluir la lógica del modelo
require_once('model/bd_mysql.php');
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Vocavatar</title>
        <!--GRID 960-->
        <link rel="stylesheet" href="include/css/960/text.css" />
        <link rel="stylesheet" href="include/css/960/reset.css" />
        <link rel="stylesheet" href="include/css/960/960.css" />
        <link rel="stylesheet" href="view/index.css" />

        <!--estilos-->
        <link rel="stylesheet" href="include/css/jq/jquery-ui-1.8.16.custom.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="include/css/jq/validation/screen.css" />

        <!--slide-->
        <link rel="stylesheet" href="include/css/slide/refineslide.css" />
        
        <!--Action script-->
        <script type="text/javascript" src="include/js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="include/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="include/js/jquery.form.js"></script>
        <script type="text/javascript" src="include/js/jquery.validate.js"></script>
        <script type="text/javascript" src="include/js/slide/jquery.refineslide.min.js"></script>
    </head>
      <body>
    
    <!-- inicio -->
    
      <div id="contenido" class="container_12">
      <div class="grid_12">
            <?php
            require_once"view/intro.php";
            ?>
      </div>      
      </div>
    
    <!--fin inicio -->
       
      </body>
</html>
