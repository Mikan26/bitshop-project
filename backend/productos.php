<?php
include '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre_producto'];
    $descripcion = $_POST['descripcion_producto'];
    $precio = $_POST['precio_producto'];
    $categoria_id = $_POST['categoria_producto'];

    $producto = new Producto($nombre, $descripcion, $precio, $categoria_id);
    $producto->guardar();

    echo "Producto guardado con éxito.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Productos</title>
</head>

<body>
    <a href="views/productos.html">Agregar otro producto</a>
    <br>
    <a href="lista_productos.php">Ver todos los productos</a>
</body>

</html>