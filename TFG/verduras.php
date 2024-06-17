<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="assets/CSS/index.css" rel="stylesheet">
	<link href="assets/CSS/compras.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Sonsie One' rel='stylesheet'>
	<title>TFG equipo 2</title>
</head>

<body>
	<!-- Se incluye el header de la página -->
	<?php
	include("header.php");
	?>

	<div class="padre">
		<!-- Estructura html del carrito -->
		<div id="cart" class="cart-container">
			<h2>Carrito de Compras</h2>
			<ul id="cart-items" class="cart-items"></ul>
			<div id="total" class="total"></div>
			<div id="payment-form" class="payment-form">
				<h2>Pasarela de Pago</h2>
				<p>Por favor, completa tu pago:</p>
				<button onclick="processPayment()">Pagar con Tarjeta</button>
			</div>
		</div>
		<!-- Estructura de la página de verduras -->
		<h1 class="pt-5 px-5 titulo-tipo" style="color: green;">Verduras</h1>
		<div class="body-container">
			<div class="item-container">
				<h2 class="item-titulo">Aguacate Hass</h2>
				<div class="item-img"><img width="400px" height="auto" class="foto_carrito" src="assets/images/verduras/aguacatehass.png" alt="foto de aguacate"></div>
				<p class="item-precio">Precio: 5.99€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-aguacate">Cantidad:</label>
					<input type="number" id="cantidad-aguacate" name="cantidad-aguacate" value="0" min="0">
					<button onclick="addToCart('Aguacate Hass', 5.99, 'cantidad-aguacate')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Berenjena</h2>
				<div class="item-img"><img width="350px" height="auto" class="foto_carrito" src="assets/images/verduras/berenjena.png" alt="Foto de berenjena"></div>
				<p class="item-precio">Precio: 4.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-berenjena">Cantidad:</label>
					<input type="number" id="cantidad-berenjena" name="cantidad-berenjena" value="0" min="0">
					<button onclick="addToCart('Berenjena', 4.50, 'cantidad-berenjena')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Boniato</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/boniato.png" alt="Foto de boniato"></div>
				<p class="item-precio">Precio: 2.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-boniato">Cantidad:</label>
					<input type="number" id="cantidad-boniato" name="cantidad-boniato" value="0" min="0">
					<button onclick="addToCart('Boniato', 2.50, 'cantidad-boniato')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Brocoli</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/brocoli.png" alt="Foto de brocoli"></div>
				<p class="item-precio">Precio: 3.50€ / pieza</p>
				<div class="cantidad-container">
					<label for="cantidad-brocoli">Cantidad:</label>
					<input type="number" id="cantidad-brocoli" name="cantidad-brocoli" value="0" min="0">
					<button onclick="addToCart('Brocoli', 3.50, 'cantidad-brocoli')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Calabacin</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/calabacin.png" alt="Foto de calabacín"></div>
				<p class="item-precio">Precio: 2.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-calabacin">Cantidad:</label>
					<input type="number" id="cantidad-calabacin" name="cantidad-calabacin" value="0" min="0">
					<button onclick="addToCart('Calabacín', 2.50, 'cantidad-calabacin')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Calabaza cacahuete</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/calabaza-cacahuete.png" alt="Foto de calabaza"></div>
				<p class="item-precio">Precio: 3.50€ / pieza</p>
				<div class="cantidad-container">
					<label for="cantidad-calabaza">Cantidad:</label>
					<input type="number" id="cantidad-calabaza" name="cantidad-calabaza" value="0" min="0">
					<button onclick="addToCart('Calabaza cacahuete', 3.50, 'cantidad-calabaza')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Cebolla</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/cebolla.png" alt="Foto de cebolla"></div>
				<p class="item-precio">Precio: 3.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-cebolla">Cantidad:</label>
					<input type="number" id="cantidad-cebolla" name="cantidad-cebolla" value="0" min="0">
					<button onclick="addToCart('Cebolla', 3.50, 'cantidad-cebolla')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Curcuma fresca</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/curcuma.png" alt="Foto de curcuma"></div>
				<p class="item-precio">Precio: 2.00€ / pack</p>
				<div class="cantidad-container">
					<label for="cantidad-curcuma">Cantidad:</label>
					<input type="number" id="cantidad-curcuma" name="cantidad-curcuma" value="0" min="0">
					<button onclick="addToCart('Curcuma fresca', 2.00, 'cantidad-curcuma')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Jengibre</h2>
				<div class="item-img"><img width="300px" height="auto" class="foto_carrito" src="assets/images/verduras/jengibre.png" alt="Foto de jengibre"></div>
				<p class="item-precio">Precio: 6€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-jengibre">Cantidad:</label>
					<input type="number" id="cantidad-jengibre" name="cantidad-jengibre" value="0" min="0">
					<button onclick="addToCart('Jengibre', 6.00, 'cantidad-jengibre')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Kale</h2>
				<div class="item-img"><img width="300px" height="auto" class="foto_carrito" src="assets/images/verduras/kale.png" alt="Foto de kale"></div>
				<p class="item-precio">Precio: 3.50€ / pack</p>
				<div class="cantidad-container">
					<label for="cantidad-kale">Cantidad:</label>
					<input type="number" id="cantidad-kale" name="cantidad-kale" value="0" min="0">
					<button onclick="addToCart('Kale', 3.50, 'cantidad-kale')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Pimiento amarillo</h2>
				<div class="item-img"><img width="250px" height="auto" class="foto_carrito" src="assets/images/verduras/pimientoa.png" alt="Foto de pimiento amamrillo"></div>
				<p class="item-precio">Precio: 4.50€ / kg </p>
				<div class="cantidad-container">
					<label for="cantidad-pimiento-amarillo">Cantidad:</label>
					<input type="number" id="cantidad-pimiento-amarillo" name="cantidad-pimiento-amarillo" value="0" min="0">
					<button onclick="addToCart('Pimiento amarillo', 4.50, 'cantidad-pimiento-amarillo')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Pimiento italiano</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/pimiento-italiano.png" alt="Foto de pimiento italiano"></div>
				<p class="item-precio">Precio: 3.50€ / pieza</p>
				<div class="cantidad-container">
					<label for="cantidad-pimiento-italiano">Cantidad:</label>
					<input type="number" id="cantidad-pimiento-italiano" name="cantidad-pimiento-italiano" value="0" min="0">
					<button onclick="addToCart('Pimiento italiano', 3.50, 'cantidad-pimiento-italiano')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Pimiento tricolor</h2>
				<div class="item-img"><img width="auto" height="250px" class="foto_carrito" src="assets/images/verduras/pimientoTricolor.png" alt="Foto de pimiento tricolor"></div>
				<p class="item-precio">Precio: 3.50€ / pack</p>
				<div class="cantidad-container">
					<label for="cantidad-pimiento-tricolor">Cantidad:</label>
					<input type="number" id="cantidad-pimiento-tricolor" name="cantidad-pimiento-tricolor" value="0" min="0">
					<button onclick="addToCart('Pimiento tricolor', 3.50, 'cantidad-pimiento-tricolor')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Puerro</h2>
				<div class="item-img"><img width="439px" height="auto" class="foto_carrito" src="assets/images/verduras/puerro.png" alt="Foto de puerro"></div>
				<p class="item-precio">Precio: 3.50€ / pack</p>
				<div class="cantidad-container">
					<label for="cantidad-puerro">Cantidad:</label>
					<input type="number" id="cantidad-puerro" name="cantidad-puerro" value="0" min="0">
					<button onclick="addToCart('Puerro', 3.50, 'cantidad-puerro')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Tomate rama</h2>
				<div class="item-img"><img width="400px" height="auto" class="foto_carrito" src="assets/images/verduras/tomate-rama.png" alt="Foto de tomate rama"></div>
				<p class="item-precio">Precio: 3.00€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-tomate">Cantidad:</label>
					<input type="number" id="cantidad-tomate" name="cantidad-tomate" value="0" min="0">
					<button onclick="addToCart('Tomate rama', 3.00, 'cantidad-tomate')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

			<div class="item-container">
				<h2 class="item-titulo">Zanahoria</h2>
				<div class="item-img"><img width="400px" height="auto" class="foto_carrito" src="assets/images/verduras/zanahoria.png" alt="Foto de zanahoria"></div>
				<p class="item-precio">Precio: 2.50€ / kg</p>
				<div class="cantidad-container">
					<label for="cantidad-zanahoria">Cantidad:</label>
					<input type="number" id="cantidad-zanahoria" name="cantidad-zanahoria" value="0" min="0">
					<button onclick="addToCart('Zanahoria', 2.50, 'cantidad-zanahoria')" class="boton-agregar">Agregar al Carrito</button>
				</div>
			</div>

		</div>
		<!-- Script JavaScript del carrito -->
		<script src="assets/js/carrito.js"></script>
	</div>
	<!-- Incluimos el pie de página -->
	<?php
	include("footer.php");
	?>
</body>

</html>