<!-- Envío php de los datos de pago a la base de datos -->
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

    $numero_tarjeta = $_POST['numero_tarjeta'];
    $fecha_caducidad = $_POST['fecha_caducidad'];
    $nombre_tarjeta = $_POST['nombre_tarjeta'];
    $cvv = $_POST['cvv'];
    $direccion_envio = $_POST['direccion_envio'];

    $consulta = $connection->prepare("INSERT INTO pago_datos (numero_tarjeta, fecha_caducidad, nombre_tarjeta, cvv, direccion_envio) VALUES (?, ?, ?, ?, ?)");
    $consulta->bind_param("sssss", $numero_tarjeta, $fecha_caducidad, $nombre_tarjeta, $cvv, $direccion_envio);

    if ($consulta->execute()) {
        echo "Información guardada correctamente";
    } else {
        echo "Error: " . $consulta->error;
    }

    $consulta->close();
    $connection->close();
}
?>