<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="assets/CSS/index.css" rel="stylesheet">
	<link href="assets/CSS/frutas.css" rel="stylesheet">

	<title>TFG equipo 2</title>
</head>

<body>

	<?php
	include("header.php");
	?>
	<div class="padre">
		<div id="cart" class="cart-container">
			<h2>Carrito de Compras</h2>
			<ul id="cart-items" class="cart-items"></ul>
			<div id="total" class="total"></div>
			<div id="payment-form" class="payment-form">
				<h2>Pasarela de Pago</h2>
				<p>Por favor, completa tu pago:</p>
				<button onclick="processPayment()">Pagar con PayPal</button>
			</div>
		</div>
		<h1>Frutas</h1>

		<div>
			<h2>Cereza</h2>
			<div><img class="foto_carrito" src="assets/images/frutas/cherry.png" alt="Foto de cerezas"></div>
			<p>Precio: 7.50€ / kg </p>
			<label for="cantidad-cereza">Cantidad:</label>
			<input type="number" id="cantidad-cereza" name="cantidad-cereza" value="0" min="0">
			<button onclick="addToCart('Cereza', 7.50, 'cantidad-cereza')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Ciruela roja</h2>
			<div> <img class="foto carrito" src="assets/images/frutas/ciruela.png" alt="Foto de ciruela"></div>
			<p>Precio: 4.50€ / kg </p>
			<label for="cantidad-ciruela">Cantidad:</label>
			<input type="number" id="cantidad-ciruela" name="cantidad-ciruela" value="0" min="0">
			<button onclick="addToCart('Ciruela roja', 4.50, 'cantidad-ciruela')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Frambuesa</h2>
			<div><img class="foto carrito" src="assets/images/frutas/frambuesa.png" alt="Foto de frambuesa"></div>
			<p>Precio: 3.50€ / bandeja </p>
			<label for="cantidad-frambuesa">Cantidad:</label>
			<input type="number" id="cantidad-frambuesa" name="cantidad-frambuesa" value="0" min="0">
			<button onclick="addToCart('Frambuesa', 3.50, 'cantidad-frambuesa')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Kiwi verde</h2>
			<div><img class="foto carrito" src="assets/images/frutas/kiwi.png" alt="Foto de kiwi"></div>
			<p>Precio: 5.50€ / kg </p>
			<label for="cantidad-kiwi">Cantidad:</label>
			<input type="number" id="cantidad-kiwi" name="cantidad-kiwi" value="0" min="0">
			<button onclick="addToCart('Kiwi verde', 5.50, 'cantidad-kiwi')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Lima</h2>
			<div><img class="foto carrito" src="assets/images/frutas/lima.png" alt="Foto de lima"></div>
			<p>Precio: 6.50€ / kg</p>
			<label for="cantidad-lima">Cantidad:</label>
			<input type="number" id="cantidad-lima" name="cantidad-lima" value="0" min="0">
			<button onclick="addToCart('Lima', 6.50, 'cantidad-lima')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Limón</h2>
			<div><img class="foto carrito" src="assets/images/frutas/limon.png" alt="Foto de limón"></div>
			<p>Precio: 3.50€ / kg </p>
			<label for="cantidad-limon">Cantidad:</label>
			<input type="number" id="cantidad-limon" name="cantidad-limon" value="0" min="0">
			<button onclick="addToCart('Limón', 3.50, 'cantidad-limon')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Mandarina</h2>
			<div><img class="foto carrito" src="assets/images/frutas/mandarina.png" alt="Foto de mandarina"></div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad-mandarina">Cantidad:</label>
			<input type="number" id="cantidad-mandarina" name="cantidad-mandarina" value="0" min="0">
			<button onclick="addToCart('Mandarina', 3.50, 'cantidad-mandarina')">Agregar al Carrito</button>
		</div>
		<div>
			<h2>Manzana golden</h2>
			<div><img class="foto carrito" src="assets/images/frutas/manzana-golden.png" alt="Foto de manzana golden"> </div>
			<p>Precio: 4.50€ / kg</p>
			<label for="cantidad-manzana-golden">Cantidad:</label>
			<input type="number" id="cantidad-manzana-golden" name="cantidad-manzana-golden" value="0" min="0">
			<button onclick="addToCart('Manzana golden', 4.50, 'cantidad-manzana-golden')">Agregar al Carrito</button>
		</div>
		<div>
			<h2>Manzana Story</h2>
			<div><img class="foto carrito" src="assets/images/frutas/manzana-story.png" alt="Foto de manzana story"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad-manzana-story">Cantidad:</label>
			<input type="number" id="cantidad-manzana-story" name="cantidad-manzana-story" value="0" min="0">
			<button onclick="addToCart('Manzana Story', 3.50, 'cantidad-manzana-story')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Naranja de mesa</h2>
			<div><img class="foto carrito" src="assets/images/frutas/naranja-mesa.png" alt="Foto de naranja de mesa"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad-naranja">Cantidad:</label>
			<input type="number" id="cantidad-naranja" name="cantidad-naranja" value="0" min="0">
			<button onclick="addToCart('Naranja de mesa', 3.50, 'cantidad-naranja')">Agregar al Carrito</button>
		</div>

		<div>
			<h2>Plátano de canarias</h2>
			<div><img class="foto carrito" src="assets/images/frutas/platano-de-canarias.png" alt="Foto de plátano de Canarias"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad-platano">Cantidad:</label>
			<input type="number" id="cantidad-platano" name="cantidad-platano" value="0" min="0">
			<button onclick="addToCart('Plátano de canarias', 3.50, 'cantidad-platano')">Agregar al Carrito</button>
		</div>

		<script src="assets/js/carrito.js"></script>
	</div>
</body>

</html>