<?php
include '../class/autoload.php';

$db = new Database();
$conn = $db->connect();
$query = 'SELECT * FROM categorias';
$stmt = $conn->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($categorias as $categoria) {
    echo $categoria['nombre'] . '<br>';
}

echo '<a href="categorias.php">Agregar Categoría</a>';
