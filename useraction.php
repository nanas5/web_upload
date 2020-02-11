<?php
    require_once 'classes/user.php';
    $myObj = new USER;

    if(isset($_POST["btnLogin"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];
        $lname = $_POST["lname"];
        $fname = $_POST["fname"];

        // echo "test";
        $ans = $myObj->insertUser($uname,$pass,$lname,$fname);
        if($ans ==1){
            header ('location: login.html');
        }

    }else if(isset($_POST["login"])){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        $myObj->login($uname,$pass);
    }
        
?>