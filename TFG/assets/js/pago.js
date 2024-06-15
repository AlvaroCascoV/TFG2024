function processPayment() {
    const form = document.getElementById('formulario-pago');
    const paymentSuccess = document.getElementById('pago-aceptado');

    form.onsubmit = function(event) {
        event.preventDefault();

        const formData = new FormData(form);

        fetch('proceso_pago.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.includes('Información guardada correctamente')) {
                paymentSuccess.style.display = 'block';
                form.reset();
            } else {
                alert('Error: ' + data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });

        return false;
    };
}

document.addEventListener('DOMContentLoaded', function() {
    processPayment();
});
