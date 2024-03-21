<?php

class Connection{
    private $server;
    private $username;
    private $password;
    private $database_name;
    private $conn;

    function __construct($server, $username, $password, $database_name)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database_name = $database_name;
    }

    public function connect()
    {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database_name);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        
        return $this->conn;
    }
}