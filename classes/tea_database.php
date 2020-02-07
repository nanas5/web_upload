<?php
    class Database{
        private $servername = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "tea_store";
        public $conn;

        //CONSTRUCTOR ~~is a method that is automatically created when an object 
        //is created
        public function __construct(){
            $this->conn = new mysqli($this->servername, $this->username,
            $this->password,$this->database);

            if($this->conn->connect_error){
                die("Connection erroe: ".$this->conn->connect_error);
            }

            return $this->conn;
        }
    }
?>