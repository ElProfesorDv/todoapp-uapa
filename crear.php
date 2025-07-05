<?php include 'config.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $conn->query("INSERT INTO tareas (titulo, descripcion) VALUES ('$titulo', '$descripcion')");
    header("Location: index.php");
}
?>
<form method="post">
    <h2>Crear Nueva Tarea</h2>
    Título: <input type="text" name="titulo" required><br><br>
    Descripción:<br>
    <textarea name="descripcion"></textarea><br><br>
    <input type="submit" value="Guardar">
</form>
