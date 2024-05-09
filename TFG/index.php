<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
    <title>TFG equipo 2</title>
</head>

<body>
    <header id="header" class="text-black">
        <div id="logo" class="logo m-2"><img src="./assets/images/logo.png" height="32px" width="32px"></div>
        <div id="tituloHead" style="font-family: 'Sonsie One';font-size: 22px;">
           <span style="color: green;">Ver</span><span style="color: #f2f759;">Dis</span><span style="color: red;">Fruta</span>
        </div>

        <div id="botones">
            <div id="botonInicio">
                <a href="./index.php"><button class="active"><i class="fas fa-home"></i> Inicio</button></a>
            </div>
            <div id="botonDescuentos">
                <a href="./descuentos.php"><button><i class="fas fa-tag"></i> Descuentos</button></a>
            </div>
            <div id="botonDestacados">
                <a href="./destacados.php"><button> Destacados</button></a>
            </div>
            <div id="botonFrutas">
                <a href=""><button> Frutas</button></a>
            </div>
            <div id="botonVerduras">
                <a href=""><button> Verduras</button></a>
            </div>
            <div id="botonCarrito">
                <a href="./cart.php"><button><i class="fas fa-shopping-cart"></i> Carrito</button></a>
            </div>
            <div id="menu">
                <a href=""><button> <i class="fas fa-bars"></i></button></a>
            </div>

        </div>
    </header>

</body>

</html>

<?php
echo "prueba php";

?>

<?php
include("footer.php");
?>