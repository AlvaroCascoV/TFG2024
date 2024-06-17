<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href="assets/CSS/index.css" rel="stylesheet">
    <link href="assets/CSS/carrusel.css" rel="stylesheet">
    <link href="assets/CSS/banner.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
    <title>TFG equipo 2</title>
</head>

<body>
    <!-- Se incluye el header de la página -->
    <?php
    include("header.php");
    ?>
    <!-- Estructura del banner de ofertas -->
    <div class="video-container" id="video-container">
        <div class="video-banner" id="video-banner">
            <video id="video" class="video" src="assets/images/banner.mp4" autoplay loop></video>
        </div>
    </div>
    <!-- Script JavaScript del banner -->
    <script src="assets/js/banner.js"></script>

    <!-- Estructura de la página principal -->
    <div class="contenedor-ayuda">

        <div class="index-container">

            <div class="item-container">
                <h2 class="item-titulo">Aguacate Hass</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/verduras/aguacatehass.png" alt="foto de aguacate hass">
                </div>
                <h5 class="item-precio">Precio: 1.50€ / pieza</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Cebolla</h2>
                <div class="item-img">
                    <img width="600px" height="776px" src="assets/images/verduras/cebolla.png" alt="Foto de cebolla">
                </div>
                <h5 class="item-precio">Precio: 3.50€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Kiwi verde</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/frutas/kiwi.png" alt="Foto de kiwi">
                </div>
                <h5 class="item-precio">Precio: 5.50€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Tomate rama</h2>
                <div class="item-img">
                    <img width="325px" height="421px" src="assets/images/verduras/tomate-rama.png" alt="Foto de tomate rama">
                </div>
                <h5 class="item-precio">Precio: 3.00€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Manzana golden</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/frutas/manzana-golden.png" alt="Foto de manzana golden">
                </div>
                <h5 class="item-precio">Precio: 4.50€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Naranja de mesa</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/frutas/naranja-mesa.png" alt="Foto de naranja de mesa">
                </div>
                <h5 class="item-precio">Precio: 3.50€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Plátano de canarias</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/frutas/platano-de-canarias.png" alt="Foto de plátano de Canarias">
                </div>
                <h5 class="item-precio">Precio: 3.50€ / kg</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Kale</h2>
                <div class="item-img">
                    <img width="350px" height="453px" src="assets/images/verduras/kale.png" alt="Foto de kale">
                </div>
                <h5 class="item-precio">Precio: 3.50€ / kg</h5>
            </div>
        </div>
    </div>
    <!-- Incluimos el pie de página -->
    <?php
    include("footer.php");
    ?>
</body>

</html>