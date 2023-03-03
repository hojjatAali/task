<?php

namespace Src\model\database;

use PDO;

class Connection
{


    private PDO $connection;
    private array $config;


    public function __construct()
    {
        $this->config = include('./src/config/database.php');
        $this->connection = $this->connect();
    }


    private function connect()
    {
        $driver = $this->config['driver'];
        $dbname = $this->config['dbname'];
        $host = $this->config['host'];
        $username = $this->config['username'];
        $password = $this->config['password'];


        $dsn = "$driver:host=$host;dbname=$dbname";

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;

    }

    public function getConnection()
    {
        return $this->connection;

    }
}
