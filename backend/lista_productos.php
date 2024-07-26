<?php
include '../class/autoload.php';

$database = new Database("MIPROYECTO", "localhost", "root", "");
$producto = new Producto($database->getConnection());

$productos = $producto->getAll();
include 'views/lista_productos.php';
