<?php
include '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre_categoria'];

    $categoria = new Categoria($nombre);
    $categoria->guardar();

    echo "Categoría guardada con éxito.";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Categorías</title>
</head>

<body>
    <a href="views/categorias.html">Agregar otra categoría</a>
    <br>
    <a href="lista_categorias.php">Ver todas las categorías</a>
</body>

</html>