<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Tarjeta de Crédito</title>
    
</head>
<body>

<div class="container">
    <h2>Registro de Tarjeta de Crédito</h2>
    <form id="credit-card-form" onsubmit="return processPayment()">
        <input type="text" id="card-number" placeholder="Número de Tarjeta" required>
        <input type="date" id="expiration-date" placeholder="Fecha de Caducidad" required>
        <input type="text" id="cardholder-name" placeholder="Nombre del Titular" required>
        <input type="number" id="cvv" placeholder="Código CVV" required>
        
        <input type="submit" value="Registrar Tarjeta y Pagar">
    </form>
    <div id="payment-success">Pago realizado con éxito</div>
</div>

<script>
    function processPayment() {
        // Aquí normalmente se enviaría la solicitud de pago a la pasarela de pago
        // Pero como es una simulación, simplemente mostraremos el mensaje de éxito
        document.getElementById('payment-success').style.display = 'block';
        // Retornamos false para evitar que el formulario se envíe
        return false;
    }
</script>

</body>
</html>

