<?php
$host = "localhost";
$user = "root";
$password = "Poner Tu Pass AQUI";
$database = "TareasDB";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
