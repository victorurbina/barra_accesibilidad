<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <title>Barra de Herramientas de Accesibilidad - Ministerio de Relaciones Exteriores y Culto</title> 

        <link rel="stylesheet" title="normal" type="text/css" href="./css/overrides-color-original.css">
        <link rel="alternate stylesheet" title="alto-contraste" type="text/css" href="./css/overrides-alto-contraste.css">
        <link rel="stylesheet" type="text/css" href="./css/styles-local-repositorio.css">

        <script src="./js/jquery-1.11.3.min.js"></script>
    </head>

    <body onload="set_style_from_cookie()" onresize="ajustar_div_variable()">
    <div class="container">
    <div class="row">
        
        <div class="col-sm-12" id="div-altura-variable">
            <?php 
            $phpAncho = 1140;
            include ("./barra.php"); 
            ?>
        </div>
        
        <div class="col-sm-12">
            <div class="col-sm-4 col-lg-4"><br>
                <img src="./images/uda.png" alt="Logo Universidad de Atacama" width="50%" height="50%">     
            </div>

            <div class="col-sm-4 col-lg-4">
                <h2>Subtitulo</h2>   
            </div>
            
            <div class="col-sm-4 col-lg-4">
                <h2>Subtitulo</h2>   
            </div>
        </div>
        
        <div class="col col-sm-12" id="container-accesibilidad-zoom"> 

            <div class="barra-de-accesibilidad-informacion">
                <div role="main" id="contenido_principal" class="col col-sm-12">
                    <?php require './texto.php';?>
                </div>
            </div>  

        </div>
        
    </div>
    </div>
    </body>
</html>
<script src="./js/jquery-1.11.3.min.js"></script>