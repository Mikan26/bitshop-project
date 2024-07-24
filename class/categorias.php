<?php
/* @autor Luia Veramendi */

class Categoria
{
    private $id;
    private $nombre;
    private $db;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->db = new Database();
    }

    public function guardar()
    {
        $conn = $this->db->connect();
        $query = 'INSERT INTO categorias (nombre) VALUES (:nombre)';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->execute();
    }

    public function eliminar($id)
    {
        $conn = $this->db->connect();
        $query = 'DELETE FROM categorias WHERE id = :id';
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
