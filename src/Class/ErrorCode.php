<?php

use Illuminate\Database\MySqlConnection;

class PasswordReminder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->$dbConnection = $dbConnection;
    }
}