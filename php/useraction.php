<?php
    require_once 'php/user.php';
    $myObj = new USER;

    if(isset($_POST["adduser"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $lname = $_POST["lname"];
        $fname = $_POST["fname"];

        $ans = $myObj->insertUser($uname,$pass,$lname,$fname);
    }else if(isset($_POST["login"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        $myObj->login($uname,$pass);
    }
        
?>