<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="assets/CSS/index.css" rel="stylesheet">
	<link href="assets/CSS/frutas.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
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
		<h1 class="pt-5">Frutas</h1>
		<div class="body-container">
			<div class="item-container">
				<h2 class="item-titulo">Cereza</h2>
				<div class="item-img"><img width="300px" height="300px" class="foto_carrito" src="assets/images/frutas/cherry.png" alt="Foto de cerezas"></div>
				<p class="item-precio">Precio: 7.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-cereza">Cantidad:</label>
					<input type="number" id="cantidad-cereza" name="cantidad-cereza" value="0" min="0">
					<button onclick="addToCart('Cereza', 7.50, 'cantidad-cereza')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Ciruela roja</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/ciruela.png" alt="Foto de ciruela"></div>
				<p class="item-precio">Precio: 4.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-ciruela">Cantidad:</label>
					<input type="number" id="cantidad-ciruela" name="cantidad-ciruela" value="0" min="0">
					<button onclick="addToCart('Ciruela roja', 4.50, 'cantidad-ciruela')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Frambuesa</h2>
				<div class="item-img"><img width="300px" height="200px" class="foto carrito" src="assets/images/frutas/frambuesa.png" alt="Foto de frambuesa"></div>
				<p class="item-precio">Precio: 3.50€ / bandeja </p>
				<div class="cantidad-container">
					<label for="cantidad-frambuesa">Cantidad:</label>
					<input type="number" id="cantidad-frambuesa" name="cantidad-frambuesa" value="0" min="0">
					<button onclick="addToCart('Frambuesa', 3.50, 'cantidad-frambuesa')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Kiwi verde</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/kiwi.png" alt="Foto de kiwi"></div>
				<p class="item-precio">Precio: 5.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-kiwi">Cantidad:</label>
					<input type="number" id="cantidad-kiwi" name="cantidad-kiwi" value="0" min="0">
					<button onclick="addToCart('Kiwi verde', 5.50, 'cantidad-kiwi')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Lima</h2>
				<div class="item-img"><img width="300px" height="300px" class="foto carrito" src="assets/images/frutas/lima.png" alt="Foto de lima"></div>
				<p class="item-precio">Precio: 6.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-lima">Cantidad:</label>
					<input type="number" id="cantidad-lima" name="cantidad-lima" value="0" min="0">
					<button onclick="addToCart('Lima', 6.50, 'cantidad-lima')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Limón</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/limon.png" alt="Foto de limón"></div>
				<p class="item-precio">Precio: 3.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-limon">Cantidad:</label>
					<input type="number" id="cantidad-limon" name="cantidad-limon" value="0" min="0">
					<button onclick="addToCart('Limón', 3.50, 'cantidad-limon')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Mandarina</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/mandarina.png" alt="Foto de mandarina"></div>
				<p class="item-precio">Precio: 3.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-mandarina">Cantidad:</label>
					<input type="number" id="cantidad-mandarina" name="cantidad-mandarina" value="0" min="0">
					<button onclick="addToCart('Mandarina', 3.50, 'cantidad-mandarina')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Manzana golden</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/manzana-golden.png" alt="Foto de manzana golden"> </div>
				<p class="item-precio">Precio: 4.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-manzana-golden">Cantidad:</label>
					<input type="number" id="cantidad-manzana-golden" name="cantidad-manzana-golden" value="0" min="0">
					<button onclick="addToCart('Manzana golden', 4.50, 'cantidad-manzana-golden')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Manzana Story</h2>
				<div class="item-img"><img width="300px" height="338px" class="foto carrito" src="assets/images/frutas/manzana-story.png" alt="Foto de manzana story"> </div>
				<p class="item-precio">Precio: 3.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-manzana-story">Cantidad:</label>
					<input type="number" id="cantidad-manzana-story" name="cantidad-manzana-story" value="0" min="0">
					<button onclick="addToCart('Manzana Story', 3.50, 'cantidad-manzana-story')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Naranja de mesa</h2>
				<div class="item-img"><img width="439px" height="568px" class="foto carrito" src="assets/images/frutas/naranja-mesa.png" alt="Foto de naranja de mesa"> </div>
				<p class="item-precio">Precio: 3.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-naranja">Cantidad:</label>
					<input type="number" id="cantidad-naranja" name="cantidad-naranja" value="0" min="0">
					<button onclick="addToCart('Naranja de mesa', 3.50, 'cantidad-naranja')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Plátano de canarias</h2>
				<div class="item-img"><img width="350px" height="453px" class="foto carrito" src="assets/images/frutas/platano-de-canarias.png" alt="Foto de plátano de Canarias"> </div>
				<p class="item-precio">Precio: 3.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-platano">Cantidad:</label>
					<input type="number" id="cantidad-platano" name="cantidad-platano" value="0" min="0">
					<button onclick="addToCart('Plátano de canarias', 3.50, 'cantidad-platano')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>
		</div>
		<script src="assets/js/carrito.js"></script>
	</div>
</body>

</html>