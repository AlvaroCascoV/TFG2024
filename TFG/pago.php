<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Tarjeta de Crédito</title>
    <link href="assets/CSS/index.css" rel="stylesheet">
    <link href="assets/CSS/pago.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
</head>

<body>
    <!-- Incluimos la cabecera -->
    <?php include("header.php"); ?>

    <!-- Estructura HTML de la pasarela de pago -->
    <div class="container">
        <h2>Registro de Tarjeta de Crédito</h2>
        <form id="formulario-pago" method="POST">
            <input type="text" id="numero_tarjeta" name="numero_tarjeta" placeholder="Número de Tarjeta" required>
            <input type="date" id="fecha_caducidad" name="fecha_caducidad" placeholder="Fecha de Caducidad" required>
            <input type="text" id="nombre_tarjeta" name="nombre_tarjeta" placeholder="Nombre del Titular" required>
            <input type="number" id="cvv" name="cvv" placeholder="Código CVV" required>
            <input type="submit" value="Registrar Tarjeta y Pagar">
        </form>
        <div id="pago-aceptado">Pago realizado con éxito</div>
    </div>
    <script src="assets/js/pago.js"></script>
</body>

</html>