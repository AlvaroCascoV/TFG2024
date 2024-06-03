<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="assets/CSS/index.css" rel="stylesheet">
    <title>TFG equipo 2</title>
	<style>
		body{
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
			<h2>Aguacate Hass</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/aguacatehass.png" alt="foto de aguacate"></div>
			<p>Precio: 1.50€ / pieza</p>
			<label for="cantidad1">Cantidad:</label>
			<input type="number" id="cantidad1" name="cantidad1" value="0" min="0">
		</div>

		<div>
			<h2>Berenjena</h2>
			<div class="foto_carrito"><img  src="assets/images/verduras/berenjena.png" alt="Foto de berenjena"></div>
			<p>Precio: 4.50€ / kg </p>
			<label for="cantidad2">Cantidad:</label>
			<input type="number" id="cantidad2" name="cantidad2" value="0" min="0">
		</div>

		<div>
			<h2>Boniato</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/boniato.png" alt="Foto de boniato"></div>
			<p>Precio: 2.50€ / kg </p>
			<label for="cantidad3">Cantidad:</label>
			<input type="number" id="cantidad1"3name="cantidad3" value="0" min="0">
		</div>

		<div>
			<h2>Brocoli</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/brocoli.png" alt="Foto de brocoli"></div>
			<p>Precio: 3.50€ / pieza</p>
			<label for="cantidad4">Cantidad:</label>
			<input type="number" id="cantidad4" name="cantidad4" value="0" min="0">
		</div>

		<div>
			<h2>Calabacin</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/calabacin.png" alt="Foto de calabacín"></div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad5">Cantidad:</label>
			<input type="number" id="cantidad5" name="cantidad5" value="0" min="0">
		</div>

		<div>
			<h2>Calabaza cacahuete</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/calabaza-cacahuete.png" alt="Foto de calabaza"></div>
			<p>Precio: 3.50€ / pieza</p>
			<label for="cantidad6">Cantidad:</label>
			<input type="number" id="cantidad6" name="cantidad6" value="0" min="0">
		</div>

		<div>
			<h2>Cebolla</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/cebolla.png" alt="Foto de cebolla"></div>
			<p>Precio: 3.50€ / kg</p>
			<label for="cantidad7">Cantidad:</label>
			<input type="number" id="cantidad7" name="cantidad7" value="0" min="0">
		</div>
		
		<div>
			<h2>Curcuma fresca</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/curcuma.png" alt="Foto de curcuma"></div>
			<p>Precio: 2.50€ / pack</p>
			<label for="cantidad8">Cantidad:</label>
			<input type="number" id="cantidad8" name="cantidad8" value="0" min="0">
		</div>

		<div>
			<h2>Jengibre</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/jengibre.png" alt="Foto de jengibre"></div>
			<p>Precio: 6€ / kg</p>
			<label for="cantidad9">Cantidad:</label>
			<input type="number" id="cantidad9" name="cantidad9" value="0" min="0">
		</div>

		<div>
			<h2>Kale</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/kale.png" alt="Foto de kale"></div>
			<p>Precio: 3.50€ / pack</p>
			<label for="cantidad10">Cantidad:</label>
			<input type="number" id="cantidad10" name="cantidad10" value="0" min="0">
		</div>
		
		<div>
			<h2>Pimiento amarillo</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/pimientoa.png" alt="Foto de pimiento amamrillo"></div>
			<p>Precio: 4.50€ / kg </p>
			<label for="cantidad11">Cantidad:</label>
			<input type="number" id="cantidad11" name="cantidad11" value="0" min="0">
		</div>
			
		<div>
			<h2>Pimiento italiano</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/pimiento-italiano.png" alt="Foto de pimiento italiano"></div>
			<p>Precio: 3.50€ / pieza</p>
			<label for="cantidad12">Cantidad:</label>
			<input type="number" id="cantidad12" name="cantidad12" value="0" min="0">
		</div>

		<div>
			<h2>Pimiento tricolor</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/pimientoTricolor.png" alt="Foto de pimiento tricolor"></div>
			<p>Precio: 3.50€ / pack</p>
			<label for="cantidad13">Cantidad:</label>
			<input type="number" id="cantidad13" name="cantidad13" value="0" min="0">
			</div>

		<div>
			<h2>Puerro</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/puerro.png" alt="Foto de puerro"></div>
			<p>Precio: 3.50€ / pack</p>
			<label for="cantidad14">Cantidad:</label>
			<input type="number" id="cantidad14" name="cantidad14" value="0" min="0">
		</div>

		<div>
			<h2>Tomate rama</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/tomate-rama.png" alt="Foto de tomate rama"></div>
			<p>Precio: 3.00€ / kg</p>
			<label for="cantidad15">Cantidad:</label>
			<input type="number" id="cantidad15" name="cantidad15" value="0" min="0">
		</div>

		<div>
			<h2>Zanahoria</h2>
			<div><img class="foto_carrito" src="assets/images/verduras/zanahoria.png" alt="Foto de zanahoria"></div>
			<p>Precio: 2.50€ / kg</p>
			<label for="cantidad16">Cantidad:</label>
			<input type="number" id="cantidad16" name="cantidad16" value="0" min="0">
		</div>	

        <button type="submit">Agregar al carrito</button>
	</form>
</body>
</html>
