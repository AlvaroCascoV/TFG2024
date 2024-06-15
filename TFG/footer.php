<footer>
  <div class="columnas-footer">
    <div class="columna-footer">
      <h3 class="cabecera-columna-footer">Sobre nosotros</h3>
      <p>En Verdisfruta encontrarás una gran variedad de frutas y verduras ecológicas a tu total disposición.</p>
    </div>
    <div class="columna-footer">
      <h3 class="cabecera-columna-footer">Contacto</h3>
      <p>Correo: contacto@verdisfruta.com</p>
      <p>Teléfono: 695 66 99 55</p>
      <p>Dirección: C. Retama, 3, Madrid, España</p>
      <ul class="redes-footer">
        <li><a href="https://twitter.com/home"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
      </ul>
    </div>
    <div class="columna-footer">
      <h3 class="cabecera-columna-footer">Formulario de contacto</h3>
      <form class="formulario-contacto" action="#" method="POST">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <textarea name="mensaje" placeholder="Mensaje"></textarea>
        <input type="submit" value="Enviar" class="boton-enviar">
      </form>
    </div>
  </div>
  <div class="copyright"><i class="far fa-copyright"></i> 2024, Verdisfruta. Todos los derechos reservados</div>
</footer>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Grupo2TFG2024";

// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
}

// Get form data
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Prepare and bind
$consulta = $connection->prepare("INSERT INTO formulario_datos (nombre, email, mensaje) VALUES (?, ?, ?)");
$consulta->bind_param("sss", $nombre, $email, $mensaje);

// Execute statement
if ($consulta->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $consulta->error;
}

// Close connection
$consulta->close();
$connection->close();
?>
