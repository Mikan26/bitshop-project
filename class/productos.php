<?php
/* @autor Luis Veramendi */

class Producto
{
    private $id;
    private $nombre;
    private $precio;
    private $categoria_id;
    private $db;

    public function __construct($nombre, $precio, $categoria_id)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria_id = $categoria_id;
        $this->db = new Database();
    }

    public function guardar()
    {
        $conn = $this->db->connect();
        $query = 'INSERT INTO productos (nombre, precio, categoria_id) VALUES (:nombre, :precio, :categoria_id)';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':precio', $this->precio);
        $stmt->bindParam(':categoria_id', $this->categoria_id);
        $stmt->execute();
    }

    public function eliminar($id)
    {
        $conn = $this->db->connect();
        $query = 'DELETE FROM productos WHERE id = :id';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
