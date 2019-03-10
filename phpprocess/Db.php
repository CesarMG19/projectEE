<?php

class db{
    private $serverName;
    private $userName;
    private $password;
    private $database;
    private $table;

    public function connect(){
        $this->serverName = "localhost";
        $this->userName = "cesar";
        $this->password = "Christo48";
        $this->database = "univa";
        $connection = new mysqli($this->serverName, $this->userName, $this->password, $this->database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        } else{
            return $connection;
        } 
    }
}

?>  



