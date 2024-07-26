<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../class/autoload.php';

$database = new Database("MIPROYECTO", "localhost", "root", "");
$datos = new Categoria($database->getConnection());

$categorias = $datos->getAll();
include 'views/lista_categorias.php';
