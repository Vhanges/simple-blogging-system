<?php

include '../app/config/talablogDB.php';
include '../app/core/model.php';

class User extends Model{
    private $registerUsername;
    private $registerPassword;
    protected $table = 'users';
    

    public function setRegisterUser($username, $password, $usertype){
        
        // $sql = "INSERT INTO users(username, password, user_type) VALUES(?, ?, ?)";
        // $stmt = $this->connect()->prepare($sql);
        // $stmt->execute([$username, $password, $usertype]);


        // header('Location: ../users/views/login.php');
        // exit();
       }
}