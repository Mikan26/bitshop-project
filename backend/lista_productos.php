<?php
include '../class/autoload.php';

$db = new Database();
$conn = $db->connect();
$query = 'SELECT * FROM productos';
$stmt = $conn->prepare($query);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($productos as $producto) {
    echo $producto['nombre'] . '<br>';
}

echo '<a href="productos.php">Agregar Producto</a>';
