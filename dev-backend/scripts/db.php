<?php
// Conexion a la base de datos
$host = "localhost";
$user = "root";
$password = "root"; // Asegúrate de que sea la correcta
$database = "db_espiritu_santo";

$conn = new mysqli($host, $user, $password, $database, 3306);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


?>