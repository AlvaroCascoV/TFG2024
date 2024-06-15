<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta de la Compra</title>
    <link href="assets/CSS/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("header.php");
    ?>

    <div class="container"> <!-- Contenedor principal -->
        <h2>Productos Disponibles</h2> <!-- Encabezado de la sección de productos -->

        <div class="product" id="product1"> <!-- Primer producto -->
            <img src="producto1.png" alt="Producto 1" width="100"> <!-- Imagen del producto -->
            <p>Producto 1 - $10</p> <!-- Descripción del producto -->
            <button onclick="addToCart('Producto 1', 10)">Agregar al Carrito</button> <!-- Botón para agregar al carrito -->
        </div>

        <div class="product" id="product2"> <!-- Segundo producto -->
            <img src="producto2.png" alt="Producto 2" width="100"> <!-- Imagen del producto -->
            <p>Producto 2 - $20</p> <!-- Descripción del producto -->
            <button onclick="addToCart('Producto 2', 20)">Agregar al Carrito</button> <!-- Botón para agregar al carrito -->
        </div>

        <div class="product" id="product3"> <!-- Tercer producto -->
            <img src="producto3.png" alt="Producto 3" width="100"> <!-- Imagen del producto -->
            <p>Producto 3 - $15</p> <!-- Descripción del producto -->
            <button onclick="addToCart('Producto 3', 15)">Agregar al Carrito</button> <!-- Botón para agregar al carrito -->
        </div>
    </div>

    <div id="cart" class="container"> <!-- Contenedor del carrito de compras -->
        <h2>Carrito de Compras</h2> <!-- Encabezado del carrito -->
        <ul id="cart-items"> <!-- Lista de elementos del carrito -->
        </ul>
        <div id="total"></div> <!-- Total de la compra -->
        <div id="payment-form"> <!-- Formulario de pago -->
            <h2>Pasarela de Pago</h2> <!-- Encabezado de la pasarela de pago -->
            <p>Por favor, completa tu pago:</p> <!-- Instrucciones para completar el pago -->
            <button onclick="processPayment()">Pagar con PayPal</button> <!-- Botón para pagar con PayPal -->
        </div>
    </div>

    <script>
        // Variables para mantener el estado del carrito
        let cartItems = [];
        let totalPrice = 0;

        // Función para agregar un producto al carrito
        function addToCart(productName, price) {
            cartItems.push({
                name: productName,
                price: price
            }); // Agrega el producto al arreglo del carrito
            totalPrice += price; // Actualiza el precio total
            updateCart(); // Actualiza la visualización del carrito
        }

        // Función para borrar un producto del carrito
        function removeFromCart(index) {
            const removedItem = cartItems.splice(index, 1)[0]; // Remueve el producto del arreglo del carrito
            totalPrice -= removedItem.price; // Resta el precio del producto removido del precio total
            updateCart(); // Actualiza la visualización del carrito
        }

        // Función para actualizar la visualización del carrito
        function updateCart() {
            const cartList = document.getElementById('cart-items'); // Obtiene la lista de elementos del carrito
            cartList.innerHTML = ''; // Borra el contenido actual de la lista
            cartItems.forEach((item, index) => { // Itera sobre los elementos del carrito
                const li = document.createElement('li'); // Crea un nuevo elemento de lista
                li.textContent = `${item.name} - $${item.price}`; // Establece el texto del elemento de lista con el nombre y precio del producto
                const removeButton = document.createElement('button'); // Crea un botón para remover el producto del carrito

                removeButton.textContent = 'Eliminar'; // Establece el texto del botón
                removeButton.onclick = () => removeFromCart(index); // Asigna la función removeFromCart al evento click del botón
                li.appendChild(removeButton); // Agrega el botón al elemento de lista
                cartList.appendChild(li); // Agrega el elemento de lista a la lista de elementos del carrito
            });

            document.getElementById('cart').style.display = 'block'; // Muestra el contenedor del carrito
            document.getElementById('total').textContent = `Total: $${totalPrice}`; // Muestra el total de la compra
            document.getElementById('payment-form').style.display = 'block'; // Muestra el formulario de pago
        }

        function processPayment() {
            // Aquí es donde normalmente se enviaría la solicitud de pago a la pasarela de pago, pero como es una simulación, no lo haremos.
            alert("¡Realizar Pago! Redirigiendo...");
            // Redirige al usuario a la página de registro de tarjeta de crédito
            window.location.href = "registro_tarjeta.html";
        }
    </script>

</body>

</html>