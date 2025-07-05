<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de Tareas</h1>
    <a href="crear.php">Agregar Nueva Tarea</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM tareas");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['titulo']."</td>
                    <td>".$row['descripcion']."</td>
                    <td>
                        <a href='editar.php?id=".$row['id']."'>Editar</a> |
                        <a href='eliminar.php?id=".$row['id']."'>Eliminar</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
