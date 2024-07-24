<?php
/* @autor Luis Veramendi */

class Database
{
    private $host = 'localhost';
    private $db_name = 'MIPROYECTO';
    private $username = 'root'; // Cambia esto si es necesario
    private $password = ''; // Cambia esto si es necesario
    private $conn;

    public function connect()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }
        return $this->conn;
    }

    public function insert($table, $data)
    {
        // Código para insertar datos
    }

    public function update($table, $data, $where)
    {
        // Código para actualizar datos
    }

    public function delete($table, $where)
    {
        // Código para eliminar datos
    }

    public function select($table, $columns, $where = null)
    {
        // Código para seleccionar datos
    }
}
