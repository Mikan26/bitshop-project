<?php
class Producto {
    public $id;
    public $nombre;
    public $imagen;
    public $descripcion;
    public $precio;
    public $categoria_id;

    public function __construct($id, $nombre, $imagen, $descripcion, $precio, $categoria_id) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->categoria_id = $categoria_id;
    }

    // Métodos para interactuar con la base de datos, como guardar, actualizar, eliminar, etc.
}
?>
