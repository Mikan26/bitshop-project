<?php
include '../class/autoload.php';

$db = new Database();
$conn = $db->connect();
$query = 'SELECT * FROM categorias';
$stmt = $conn->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorías</title>
</head>

<body>
    <h1>Lista de Categorías</h1>
    <ul>
        <?php foreach ($categorias as $categoria) : ?>
            <li><?php echo $categoria['nombre']; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="views/categorias.html">Agregar otra categoría</a>
</body>

</html>