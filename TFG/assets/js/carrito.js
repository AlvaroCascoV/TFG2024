//Código del carrito de compra
let cartItems = [];
let totalPrice = 0;
//Función de añadir al carrito
function addToCart(productName, price, quantityId) {
    const quantityInput = document.getElementById(quantityId);
    const quantity = parseInt(quantityInput.value);

    if (quantity > 0) {
        for (let i = 0; i < quantity; i++) {
            cartItems.push({
                name: productName,
                price: price
            });
            totalPrice += price;
        }
        updateCart();
    } else {
        alert("Por favor, seleccione una cantidad válida.");
    }
}
//Función de eliminar del carrito
function removeFromCart(index) {
    const removedItem = cartItems.splice(index, 1)[0];
    totalPrice -= removedItem.price;
    updateCart();
}
//Función de actualizar el carrito
function updateCart() {
    const cartList = document.getElementById('cart-items');
    cartList.innerHTML = '';
    cartItems.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - ${item.price.toFixed(2)} € `;
        const removeButton = document.createElement('button');

        removeButton.textContent = 'Eliminar';
        removeButton.onclick = () => removeFromCart(index);
        li.appendChild(removeButton);
        cartList.appendChild(li);
    });

    document.getElementById('cart').style.display = 'block';
    document.getElementById('total').textContent = `Total: ${totalPrice.toFixed(2)} € `;
    document.getElementById('payment-form').style.display = 'block';
}
//Función de procesamiento del pago
function processPayment() {
    alert("Acepta para redirigir a la pasarela de pago.");
    window.location.href = "pago.php";
}
