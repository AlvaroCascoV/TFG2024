function processPayment() {
    // Aquí normalmente se enviaría la solicitud de pago a la pasarela de pago
    // Pero como es una simulación, simplemente mostraremos el mensaje de éxito
    document.getElementById('payment-success').style.display = 'block';
    // Retornamos false para evitar que el formulario se envíe
    return false;
}
