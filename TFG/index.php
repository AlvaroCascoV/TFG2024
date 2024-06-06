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


    <style>
        .contenedor-ayuda {
            display: flex;
            justify-content: center;
        }

        .index-container {
            max-width: 100%;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 16px;
            padding: 16px;
            justify-items: center;
        }

        .item-container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 200px;
            background-color: green;
        }

        .item-titulo {
            margin-top: 1em;
            position: absolute;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            transform: translate(0, -275%);
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .item-precio {
            margin-bottom: 1em;
            position: absolute;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            transform: translate(0, 275%);
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <!--Rellenar con recomendados y tal-->
    <div class="video-container" id="video-container">
        <div class="video-banner" id="video-banner">
            <video id="video" class="video" src="assets/images/banner.mp4" autoplay loop></video>
        </div>
    </div>
    <script src="assets/js/banner.js"></script>

    <div class="contenedor-ayuda">
        <div class="index-container">
            <div class="item-container">
                <h2 class="item-titulo">Aguacate Hass</h2>
                <div class="item-img">
                    <img width="439px" height="568px" width="439px" height="568px" src="assets/images/verduras/aguacatehass.png" alt="foto de aguacate hass">
                </div>
                <h5 class="item-precio">Precio: 1.50€ / pieza</h5>
            </div>

            <div class="item-container">
                <h2 class="item-titulo">Cebolla</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/verduras/cebolla.png" alt="Foto de cebolla">
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
                    <img width="439px" height="568px" src="assets/images/verduras/tomate-rama.png" alt="Foto de tomate rama">
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
                    <img width="439px" height="568px" src="assets/images/frutas/naranja.png" alt="Foto de naranja de mesa">
                </div>
            </div>
            <h5 class="item-precio">Precio: 3.50€ / kg</h5>


            <div class="item-container">
                <h2 class="item-titulo">Plátano de canarias</h2>
                <div class="item-img">
                    <img width="439px" height="568px" src="assets/images/frutas/platano-de-canarias.png" alt="Foto de plátano de Canarias">
                </div>
            </div>
            <h5 class="item-precio">Precio: 3.50€ / kg</h5>
        </div>

        <div class="item-container">
            <h2 class="item-titulo">Kale</h2>
            <div class="item-img">
                <img width="439px" height="568px" src="assets/images/verduras/kale.png" alt="Foto de kale">
            </div>
        </div>
        <h5 class="item-precio">Precio: 3.50€ / pack</h5>

    </div>
    </div>
    </div>
    </div>



    <?php
    include("footer.php");
    ?>
</body>

</html>