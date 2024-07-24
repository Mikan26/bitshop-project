<?php
include '../class/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];

    $categoria = new Categoria($nombre);
    $categoria->guardar();
}
