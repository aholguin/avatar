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

        <!--estilos-->
        <link rel="stylesheet" href="include/css/jq/jquery-ui-1.8.16.custom.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="include/css/jq/validation/screen.css" />

        <!--Action script-->
        <script type="text/javascript" src="include/js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="include/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="include/js/jquery.form.js"></script>
        <script type="text/javascript" src="include/js/jquery.validate.js"></script>
    </head>
    <body>
        <div id="contenido">
            <?php
            require_once"view/intro.php";
            ?>
        </div>
    </body>
</html>