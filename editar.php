<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $conn->query("UPDATE tareas SET titulo='$titulo', descripcion='$descripcion' WHERE id=$id");
    header("Location: index.php");
}
$result = $conn->query("SELECT * FROM tareas WHERE id=$id");
$row = $result->fetch_assoc();
?>
<form method="post">
    <h2>Editar Tarea</h2>
    Título: <input type="text" name="titulo" value="<?php echo $row['titulo']; ?>" required><br><br>
    Descripción:<br>
    <textarea name="descripcion"><?php echo $row['descripcion']; ?></textarea><br><br>
    <input type="submit" value="Actualizar">
</form>
