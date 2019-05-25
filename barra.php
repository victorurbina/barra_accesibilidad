<?php
    //tomo la variable del ancho del sitio en phpAncho
    if(!isset($phpAncho)) {
        $phpAncho = 1140; //valor arbitrario si no está seteado en el sitio
    }
?>

<script>
    <?php //acá transfiero phpAncho a la variable jsAncho en Javascript ?>
    var jsAncho = "<?php echo $phpAncho; ?>" ;
    document.write("<span aria-hidden=\"true\" class=\"esconder\">jsAncho = " + jsAncho + "</span>");
</script>

<!-- - - - - - - - - - - - -->
<style>
    #barra-accesibilidad {
        max-width: <?php echo $phpAncho; echo "px"; ?> !important;
    }
</style>

<?php // incluir css de la barra de accesibilidad ?>
<link rel="stylesheet" type="text/css" href="./css/barra-de-accesibilidad.css">  

    <?php //este noscript muestra un mensaje en caso en que javascript esté desactivado, y desabilita las Opciones
    //de la barra que necesitan javascript.
    ?>

<noscript>
    
    <div class="estilo-noscript">
        <span class="signo-de-alerta">‼ </span>
        La funcionalidad de la Barra de Accesibilidad está reducida porque depende de
        una librería que no está disponible. (JQuery/JavaScript).
    </div>

    <style>
        #barra-accesibilidad ul li:nth-child(3), #barra-accesibilidad ul li:nth-child(4),
        #barra-accesibilidad ul li:nth-child(5) {display:none;}
    </style>
</noscript>

<?php // HTML de la barra de accesibilidad  ?>
<div id="accesibilidad-background">
<div id="barra-accesibilidad">
<ul id="ul-barra-accesibilidad">
    
    <li class="barra-accesibilidad-esconder-items-en-movil"><a href="index.php">Inicio</a></li>
    <li class="barra-accesibilidad-esconder-items-en-movil"><a href="accesibilidad.php">Accesibilidad</a></li>
    
    <li class="barra-accesibilidad-esconder-items-en-movil"><?php // slider de tamaño de fuente ?>
          
        <a href="#" id="minima-magnificacion">Texto<span class="esconder">Haga click en la siguiente imagen para minimizar la magnificación.</span>
            A-<img src="./images/icono-zoom-minimo.svg" alt="Icono de magnificación mínima." width="13" height="36">
        </a>

        <label class="label-tipografia-slider" for="tipografia-slider"><span class="esconder">
        Para manejar la magnificación (zoom) de la página, presione Enter en el cuadro de edición
        siguiente y pulse las flechas izquierda o derecha para aumentar o disminuir.</span>
        </label>

        <input id="tipografia-slider" type="range" min="1" max="3" step="0.01" value="0">

        <a href="#" id="maxima-magnificacion">
            <span class="esconder">Haga click en la siguiente imagen para maximizar la magnificación.</span>
            A+<img src="./images/icono-zoom-maximo.svg" alt="Icono de magnificación máxima." width="27" height="36">
        </a>
    </li>

    <li class="barra-accesibilidad-esconder-items-en-movil">Puntero
        <a href="#" id="puntero-del-mouse-chico">
            <img src="./images/icono-puntero-chico.svg" alt="Puntero del mouse original." width="27" height="36">
        </a>
       
        <a href="#" id="puntero-del-mouse-grande">
            <img src="./images/icono-puntero-grande.svg" alt="Puntero del mouse grande." width="28" height="36">
        </a>
    </li>

    <li><?php // CSS alto contraste o normal?>Color
        <a href="#" onclick="switch_style('alto-contraste');return false;">
            <span class="esconder">Versión de color de Alto contraste</span>
            <img src="./images/icono-color-alto-contraste.svg" alt="Icono de color de alto contraste.">
        </a>

        <a href="#" onclick="switch_style('normal');return false;">
            <span class="esconder">Versión de Color original</span>
            <img src="./images/icono-color-original.svg" alt="Icono de color original.">
        </a>
    </li>
    
</ul>
</div>

</div>
<?php // fin HTML de la barra de accesibilidad ?>

<?php /* incluir los js de la barra:
JS para Zoom Slider
JS para cambiar css en vivo, para la versión de alto contraste
JS para...
*/
?>
<script> var servidor='.'; </script>
<script src="./js/apps-accesibilidad.js" language="JavaScript" type="text/javascript"></script>
<!--         fin barra de accesibilidad          -->  