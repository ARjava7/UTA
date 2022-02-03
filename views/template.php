<html>
    <head>
        <TITLE> UTA</TITLE>
        <meta charset="UTF-8">
        
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    </head>
    <body>
<HEAder>

<img src="images/logo.jpg" width="95%"  height="28%">
</HEAder>
<NAV>
    <UL>
        <li><a href="index.php?action=inicio">Inicio</a></li>
        <li><a href="index.php?action=nosotros">Nosotros</a></li>
        <li><a href="index.php?action=servicios">Servicios</a></li>
        <li><a href="index.php?action=contactanos">Contactanos</a></li>
    </UL>
</NAV>
<SEction>
    <?php
$mvc= new MvcController();
$mvc->enlacesPaginasControl();
    ?>
</SEction>
<footer>
    DERECHOS UTA-ROMO ABRAHAM
</footer>
    </body>
</html>