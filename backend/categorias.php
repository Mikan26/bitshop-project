<?php
require_once '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_categoria = $_POST['nombre_categoria'];
    // Aquí puedes agregar la lógica para guardar la categoría en la base de datos
    // Por ahora, solo redirigimos a la lista de categorías

    header('Location: lista_categorias.html');
}
?>