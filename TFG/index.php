<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFG equipo 2</title>
</head>
<body>
	<h1>Tienda Online</h1>

	<form action="cart.php" method="post">
		<h2>Pimiento amarillo</h2>
		<img src="pimientoa.png" alt="Producto 1">
		<p>Precio: 4.50€/kg </p>
		<label for="cantidad1">Cantidad:</label>
		<input type="number" id="cantidad1" name="cantidad1" value="0">

		<h2>Pimiento italiano</h2>
		<img src="pimientoitaliano.png" alt="Producto 2">
		<p>Precio: 3€ /kg</p>
		<label for="cantidad2">Cantidad:</label>
		<input type="number" id="cantidad2" name="cantidad2" value="0">
       
        <h2>Repollo</h2>
		<img src="repollo.png" alt="Producto 3">
		<p>Precio: 3.50€/pieza</p>
		<label for="cantidad3">Cantidad:</label>
		<input type="number" id="cantidad3" name="cantidad3" value="0">
		
        <button type="submit">Agregar al carrito</button>
	</form>
</body>
</html>