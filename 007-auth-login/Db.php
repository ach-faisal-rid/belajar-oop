<?php
// File: Db.php
class Db {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "your_database_name";

    public function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}