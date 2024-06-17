<?php
$pagina_actual = basename($_SERVER['PHP_SELF']);
?>
<link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
<header id="header" class="text-black">
    <!-- Estructura del título y logo de la tienda -->
    <div id="tituloContainer">
        <div id="logo" class="logo m-2"><img src="./assets/images/logo.png" height="32px" width="32px"></div>
        <div id="tituloHead" style="font-family: 'Sonsie One';font-size: 22px;">
            <a style="text-decoration: none;" href="index.php"><span style="color: green;">Ver</span><span style="color: #f2f759;">Dis</span><span style="color: red;">Fruta</span></a>
        </div>
    </div>
    <!-- Estructura de la navegación de la cabecera -->
    <div id="botones">
        <div id="botonInicio">
            <a href="./index.php"><button class="<?= $pagina_actual == 'index.php' ? 'active' : '' ?>"><i class="fas fa-home"></i> Inicio</button></a>
        </div>
        <div id="botonFrutas">
            <a href="./frutas.php"><button class="<?= $pagina_actual == 'frutas.php' ? 'active' : '' ?>"> Frutas</button></a>
        </div>
        <div id="botonVerduras">
            <a href="./verduras.php"><button class="<?= $pagina_actual == 'verduras.php' ? 'active' : '' ?>"> Verduras</button></a>
        </div>
    </div>
</header>