<?php
include '../class/autoload.php';

$db = new Database();
$conn = $db->connect();
$query = 'SELECT p.*, c.nombre as categoria_nombre FROM productos p JOIN categorias c ON p.categoria_id = c.id';
$stmt = $conn->prepare($query);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
</head>

<body>
    <h1>Lista de Productos</h1>
    <ul>
        <?php foreach ($productos as $producto) : ?>
            <li><?php echo $producto['nombre']; ?> - <?php echo $producto['descripcion']; ?> - <?php echo $producto['precio']; ?> - <?php echo $producto['categoria_nombre']; ?></li>
        <?php endforeach; ?>
    </ul>
    <a href="views/productos.html">Agregar otro producto</a>
</body>

</html>