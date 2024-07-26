<?php
/* @autor Luis Veramendi*/

class Database
{
    private $connection;

    function __construct($base_datos, $host, $user, $pass)
    {
        $connection = "mysql:dbname=" . $base_datos . ";host=$host";
        $this->connection = new PDO($connection, $user, $pass);
        if (!$this->connection) throw new Exception("No se ha podido realizar la conexión a la base de datos");
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
