<?php


interface DatabaseConnectionInterface
{
    public function connect();
}

class MySQLConnection implements DatabaseConnectionInterface
{
    public function connect()
    {

    }
}

class PasswordReminder 
{
    private $dbConnection;

    public function __construct(DatabaseConnectionInterface $dbConnection)
    {
        $this->$dbConnection = $dbConnection;
    }
}