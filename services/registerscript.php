<?php 
    session_start();
    require_once __DIR__ . '/../models/user.php';
    //Temporary - Add user to the DB
    

    if(!empty($_POST["name"]) && !empty($_POST["surname"]) && !empty($_POST["email"] && !empty($_POST["password"]) && !empty($_POST["organization"]))){ 
        $user = new User();
        $user->setFirstname($_POST["name"]);
        $user->setLastname($_POST["surname"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $user->setOrganization($_POST["organization"]);
        $user->setNote("note");
        $user->setRole("user");
        $user->add();
    }
    echo "User added successfully.";
    //Write out the user data who was added
    echo "Name: " . $_POST["name"] . "<br>";
    header("Location: index.php");
    exit();
?> 