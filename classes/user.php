<?php
    session_start();
    require_once 'tea_database.php';

    class USER extends Database{
        public function insertUser($uname,$pass,$lname,$fname){
            $new_pass = md5($pass);

             $sql = "INSERT INTO users(username,password, first_name, last_name)
                    VALUES('$uname', '$new_pass','$lname', '$fname')";
            if($this->conn->query($sql)){
                return 1;                    //header("location: login.php");
            }else{
                echo "Insertion failed" .$this->conn->error;
                return 0;
            }
         }
        public function login($uname,$pass){
            $new_pass = md5($pass);

            $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$new_pass'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();

                $_SESSION["id"] = $row["id"];
                if($row["status"] == 'U'){
                    header("location: usermenu.html");
                }else{
                    header("location: additem.html");
                }

            }else{
                 echo "Error. ".$this->conn->error;
             }
         }
    }
?>