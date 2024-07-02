<?php
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_producto = $_POST['nombre_producto'];
    $imagen_producto = $_FILES['imagen_producto'];
    $descripcion_producto = $_POST['descripcion_producto'];
    $precio_producto = $_POST['precio_producto'];
    $categoria_producto = $_POST['categoria_producto'];
    
    // Aquí puedes agregar la lógica para guardar el producto en la base de datos
    // y manejar la subida de la imagen del producto

    header('Location: lista_productos.html');
}
?>
