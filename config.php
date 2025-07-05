<?php
$host = "localhost";
$user = "root";
$password = ".Sddi21072013.";  // Reemplazar por la tuya
$database = "TareasDB";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
