let cartItems = [];
let totalPrice = 0;

function addToCart(productName, price) {
    cartItems.push({
        name: productName,
        price: price
    });
    totalPrice += price;
    updateCart();
}

function removeFromCart(index) {
    const removedItem = cartItems.splice(index, 1)[0];
    totalPrice -= removedItem.price;
    updateCart();
}

function updateCart() {
    const cartList = document.getElementById('cart-items');
    cartList.innerHTML = '';
    cartItems.forEach((item, index) => {
        const li = document.createElement('li');
        li.textContent = `${item.name} - $${item.price}`;
        const removeButton = document.createElement('button');

        removeButton.textContent = 'Eliminar';
        removeButton.onclick = () => removeFromCart(index);
        li.appendChild(removeButton);
        cartList.appendChild(li);
    });

    document.getElementById('cart').style.display = 'block';
    document.getElementById('total').textContent = `Total: $${totalPrice}`;
    document.getElementById('payment-form').style.display = 'block';
}

function processPayment() {
    alert("Redirigiendo...");
    window.location.href = "pago.php";
}
