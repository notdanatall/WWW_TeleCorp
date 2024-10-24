<?php 
    session_start();
    require_once "user.php";

    if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"])) { 
        
        $user = new User();
        $user->first_name = $_POST["name"];
        $user->last_name = $_POST["surname"];
        $user->email = $_POST["email"];

        $_SESSION["logged_user"] = serialize($user);
    }
    else{
        
    }


    header("Location: index.php");
    exit();
?>