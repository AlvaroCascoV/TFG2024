<!-- Estructura HTML del pie de página -->
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
      <form class="formulario-contacto" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
        <input type="email" name="email" id="email" required placeholder="Email">
        <textarea name="mensaje" id="mensaje" required placeholder="Mensaje"></textarea>
        <input type="submit" value="Enviar" class="boton-enviar">
      </form>
    </div>
  </div>
  <div class="copyright"><i class="far fa-copyright"></i> 2024, Verdisfruta. Todos los derechos reservados</div>
</footer>
<!-- Envío php de los datos del formulario de contacto -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "Grupo2TFG2024";

  $connection = new mysqli($servername, $username, $password, $dbname);

  if ($connection->connect_error) {
    die("Conexión fallida: " . $connection->connect_error);
  }

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  $consulta = $connection->prepare("INSERT INTO formulario_datos (nombre, email, mensaje) VALUES (?, ?, ?)");
  $consulta->bind_param("sss", $nombre, $email, $mensaje);

  if ($consulta->execute()) {
    echo "Mensaje enviado correctamente";
  } else {
    echo "Error: " . $consulta->error;
  }

  $consulta->close();
  $connection->close();
}
?>