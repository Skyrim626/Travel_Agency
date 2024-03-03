<?php

// A class that is responsible for connecting to the Database
class DatabaseService {

    protected $serverName = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbName = "tourist_content_management";
    
    protected $conn = null;
    // A method that connects to the Database
    protected function connect() {

        // Connecting to the database
        $conn = mysqli_connect($this->serverName, $this->username, $this->password, $this->dbName);

        // Checks if the connection is error
        if($conn->connect_error) {
            die("". $conn->connect_error);
        }

        return $conn; // Returns a connection

    }

}