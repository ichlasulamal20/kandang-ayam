<?php
class data {
    // private $servername = "localhost";
    // private $username = "root";
    // private $password = "";
    // private $dbname = "hunn";
    private $conn;

    public function __construct($database){
        $this->conn = $database;
    }

    // public function connect() {
    //     try {
    //         $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    //         // set the PDO error mode to exception
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         echo "Connected successfully";
    //       } catch(PDOException $e) {
    //         echo "Connection failed: " . $e->getMessage();
    //       }
    // }

    public function read_last_week() {
        $query = 'select * from reading_sensor ORDER BY id DESC LIMIT 7';
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement;
    }

    
}