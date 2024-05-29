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
		body{
			padding: 1em;
		}
	</style>
</head>

<body>
	<h1>Tienda Online</h1>

	<form action="cart.php" method="post">
		<h2>Cereza</h2>
		<img src="assets/images/frutas/cherry.png" alt="foto de cerezas">
		<p>Precio: 7.50€ / kg </p>
		<label for="cantidad30">Cantidad:</label>
		<input type="number" id="cantidad30" name="cantidad30" value="0" min="0">

		<h2>Ciruela roja</h2>
		<img src="ciruela.png" alt="hola 31">
		<p>Precio: 4.50€ / kg </p>
		<label for="cantidad31">Cantidad:</label>
		<input type="number" id="cantidad31" name="cantidad30" value="0" min="0">

		<h2>Frambuesa</h2>
		<img src="frambuesa.png" alt="Producto 32">
		<p>Precio: 3.50€ / bandeja </p>
		<label for="cantidad32">Cantidad:</label>
		<input type="number" id="cantidad32" name="cantidad32" value="0" min="0">

		<h2>Kiwi verde</h2>
		<img src="kiwi.png" alt="Producto 33">
		<p>Precio: 5.50€ / kg </p>
		<label for="cantidad33">Cantidad:</label>
		<input type="number" id="cantidad33" name="cantidad33" value="0" min="0">

		<h2>Lima</h2>
		<img src="lima.png" alt="Producto 34">
		<p>Precio: 6.50€ / kg</p>
		<label for="cantidad34">Cantidad:</label>
		<input type="number" id="cantidad34" name="cantidad34" value="0" min="0">

		<h2>Limón</h2>
		<img src="limon.png" alt="Producto 35">
		<p>Precio: 3.50€ / kg </p>
		<label for="cantidad35">Cantidad:</label>
		<input type="number" id="cantidad35" name="cantidad35" value="0" min="0">

		<h2>Mandarina</h2>
		<img src="mandarina.png" alt="Producto 36">
		<p>Precio: 3.50€ / kg</p>
		<label for="cantidad36">Cantidad:</label>
		<input type="number" id="cantidad36" name="cantidad36" value="0" min="0">

        <h2>Manzana golden</h2>
		<img src="manzana-golden.png" alt="Producto 37">
		<p>Precio: 4.50€ / kg</p>
		<label for="cantidad37">Cantidad:</label>
		<input type="number" id="cantidad37" name="cantidad37" value="0" min="0">

        <h2>Manzana golden</h2>
		<img src="manzana-story.png" alt="Producto 38">
		<p>Precio: 3.50€ / kg</p>
		<label for="cantidad38">Cantidad:</label>
		<input type="number" id="cantidad38" name="cantidad38" value="0" min="0">


        <h2>Naranja de mesa</h2>
		<img src="naranja-mesa.png" alt="Producto 39">
		<p>Precio: 3.50€ / kg</p>
		<label for="cantidad39">Cantidad:</label>
		<input type="number" id="cantidad39" name="cantidad39" value="0" min="0">

        <h2>Plátano de canarias</h2>
		<img src="platano-de-canarias.png" alt="Producto 40">
		<p>Precio: 3.50€ / kg</p>
		<label for="cantidad40">Cantidad:</label>
		<input type="number" id="cantidad40" name="cantidad40" value="0" min="0">


        <button type="submit">Agregar al carrito</button>
	</form>
</body>
</html>