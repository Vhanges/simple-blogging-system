<?php

require 'models/User.php';

class UserController extends User{

    public function userRegistration(){
        if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST"){
            $registerUsername = self::sanitizeData($_POST['username']);
            $registerPassword = self::sanitizeData($_POST['password']);
            $registerUsertype = self::sanitizeData($_POST['usertype']);


            $this->setRegisterUser($registerUsername, $registerPassword, $registerUsertype);
        }
    }
    

    
//Cleans Data Entry
    public function sanitizeData($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }
}