<?php

class Database
{
    public $connection;

    public function __construct()
    {

        $dsn = "mysql:host=localhost;port=3306;user=root;dbname=demo;charset=utf8mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        $statement = $this->connection -> prepare($query);

        $statement->execute();

        return $statement;
    }
}
