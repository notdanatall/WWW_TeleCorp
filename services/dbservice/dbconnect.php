<?php
    require_once '/../../models/user.php';
    foreach(User::getAll() as $user){
        echo($user->getFirstname());
    }
?>