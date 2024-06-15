<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta de la Compra</title>
    <link href="assets/CSS/index.css" rel="stylesheet">
    <link href="assets/CSS/carrito.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="container">
        <h2>Productos Disponibles</h2>

        <div class="product" id="product1">
            <img src="producto1.png" alt="Producto 1" width="100">
            <p>Producto 1 - $10</p>
            <button onclick="addToCart('Producto 1', 10)">Agregar al Carrito</button>
        </div>

        <div class="product" id="product2">
            <img src="producto2.png" alt="Producto 2" width="100">
            <p>Producto 2 - $20</p>
            <button onclick="addToCart('Producto 2', 20)">Agregar al Carrito</button>
        </div>

        <div class="product" id="product3">
            <img src="producto3.png" alt="Producto 3" width="100">
            <p>Producto 3 - $15</p>
            <button onclick="addToCart('Producto 3', 15)">Agregar al Carrito</button>
        </div>
    </div>

    <div id="cart" class="container">
        <h2>Carrito de Compras</h2>
        <ul id="cart-items"></ul>
        <div id="total"></div>
        <div id="payment-form">
            <h2>Pasarela de Pago</h2>
            <p>Por favor, completa tu pago:</p>
            <button onclick="processPayment()">Pagar con PayPal</button>
        </div>
    </div>
    <script src="assets/js/carrito.js"></script>
</body>

</html>