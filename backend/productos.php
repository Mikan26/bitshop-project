<?php
include '../class/autoload.php';

$database = new Database("MIPROYECTO", "localhost", "root", "");

$nombre = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion_producto'];
$precio = $_POST['precio_producto'];
$categoria_id = $_POST['categoria_producto'];

$producto = new Producto($database->getConnection());
$producto->setNombre($nombre);
$producto->setDescripcion($descripcion);
$producto->setPrecio($precio);
$producto->setCategoriaId($categoria_id);
$producto->insert();
