<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="index.css" rel="stylesheet">
	<title>TFG equipo 2</title>
	<style>
		body {
			padding: 1em;
		}

		
	</style>
</head>

<body>

	<?php
	include("header.php");
	?>
	<h1>Tienda Online</h1>

	<form action="cart.php" method="post">
		<div>
			<h2>Cereza</h2>
			<div class="foto_carrito"><img src="assets/images/frutas/cherry.png" alt="Foto de cerezas"></div>
			<p>Precio: 7.50€ / kg </p>
			<label for="cantidad30">Cantidad:</label>
			<input type="number" id="cantidad30" name="cantidad30" value="0" min="0">
		</div>

        <div> 
			<h2>Ciruela roja</h2>
			<div class="foto carrito"> <img src="assets/images/frutas/ciruela.png" alt="Foto de ciruela"></div>
			<p>Precio: 4.50€ / kg </p>
			<label for="cantidad31">Cantidad:</label>
			<input type="number" id="cantidad31" name="cantidad30" value="0" min="0">
		</div>

		<div>
			<h2>Frambuesa</h2>
			<div class="foto carrito"><img src="assets/images/frutas/frambuesa.png" alt="Foto de frambuesa"></div>
			<p>Precio: 3.50€ / bandeja </p>
			<label for="cantidad32">Cantidad:</label>
			<input type="number" id="cantidad32" name="cantidad32" value="0" min="0">
		</div>

		<div>
			<h2>Kiwi verde</h2>
			<div class="foto carrito"><img src="assets/images/frutas/kiwi.png" alt="Foto de kiwi"></div>
			<p>Precio: 5.50€ / kg </p>
			<label for="cantidad33">Cantidad:</label>
			<input type="number" id="cantidad33" name="cantidad33" value="0" min="0">
		</div>

		<div>
			<h2>Lima</h2>
			<div class="foto carrito"><img src="assets/images/frutas/lima.png" alt="Foto de lima"></div>
			<p>Precio: 6.50€ / kg</p>
			<label for="cantidad34">Cantidad:</label>
			<input type="number" id="cantidad34" name="cantidad34" value="0" min="0">
		</div>

		<div>
			<h2>Limón</h2>
			<div class="foto carrito"><img src="assets/images/frutas/limon.png" alt="Foto de limón"></div>
			<p>Precio: 3.50€ / kg </p>
			<label for="cantidad35">Cantidad:</label>
			<input type="number" id="cantidad35" name="cantidad35" value="0" min="0">
		</div>

		<div>
			<h2>Mandarina</h2>
			<div class="foto carrito"><img src="assets/images/frutas/mandarina.png" alt="Foto de mandarina"></div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad36">Cantidad:</label>
			<input type="number" id="cantidad36" name="cantidad36" value="0" min="0">
		</div>
		<div>
			<h2>Manzana golden</h2>
			<div class="foto carrito"><img src="assets/images/frutas/manzana-golden.png" alt="Foto de manzana golden"> </div>
			<p>Precio: 4.50€ / kg</p>
			<label for="cantidad37">Cantidad:</label>
			<input type="number" id="cantidad37" name="cantidad37" value="0" min="0">
		</div>
		<div>
			<h2>Manzana golden</h2>
			<div class="foto carrito"><img src="assets/images/frutas/manzana-story.png" alt="Foto de manzana story"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad38">Cantidad:</label>
			<input type="number" id="cantidad38" name="cantidad38" value="0" min="0">
		</div>

		<div>
			<h2>Naranja de mesa</h2>
			<div class="foto carrito"><img src="assets/images/frutas/naranja.png" alt="Foto de naranja de mesa"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad39">Cantidad:</label>
			<input type="number" id="cantidad39" name="cantidad39" value="0" min="0">
		</div>

		<div>
			<h2>Plátano de canarias</h2>
			<div class="foto carrito"><img src="assets/images/frutas/platano-de-canarias.png" alt="Foto de plátano de Canarias"> </div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad40">Cantidad:</label>
			<input type="number" id="cantidad40" name="cantidad40" value="0" min="0">
		</div>

		<button type="submit">Agregar al carrito</button>
	</form>
</body>

</html>