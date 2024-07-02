<?php
class Categoria {
    public $id;
    public $nombre;

    public function __construct($id, $nombre) {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    // Métodos para interactuar con la base de datos, como guardar, actualizar, eliminar, etc.
}
?>
