<?php include 'config.php'; ?>
<?php
$id = $_GET['id'];
$conn->query("DELETE FROM tareas WHERE id=$id");
header("Location: index.php");
?>
