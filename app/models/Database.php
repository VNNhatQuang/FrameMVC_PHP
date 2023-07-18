<?php

class Database
{
    private $host = 'localhost';
    private $dbname = '';
    private $user = 'root';
    private $password = '';

    public $connection;


    public function Connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . '<br>';
        }
    }
}
