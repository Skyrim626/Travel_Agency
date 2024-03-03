<?php

include("./services/database.php");

// A User class for testing purposes only
class UsersTest extends DatabaseService {

    // A method for fetching all Users
    public function getAllUsers() {

        // A SQL Query Statement
        $sql = "SELECT * FROM users;";

        // Connects to the database and execute the query
        $result = mysqli_query($this->connect(), $sql);

        // Checks if the result is true
        if($result->num_rows > 0) {
            return $result; // Returns the resutl
        }

        // Returns a connection
        return $result;

    }

}