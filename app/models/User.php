<?php

include '../app/config/talablogDB.php';

class User extends Db{
    private $registerUsername;
    private $registerPassword;
    

    public function setRegisterUser($username, $password, $usertype){
        
        $sql = "INSERT INTO users(username, password, user_type) VALUES(?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username, $password, $usertype]);


        header('Location: ../users/views/login.php');
        exit();
       }
}