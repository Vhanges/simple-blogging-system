<?php

require '../app/models/User.php';
require '../app/core/Controller.php';

class UserController extends Controller {
    
    protected $usernameRegistration = "";
    protected $passwordRegistration = "";
    protected $usertypeRegistration = "";

    public function index(){
        
    }

    public function userRegistration(){
        if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST"){
            $registerUsername = self::sanitizeData($_POST['username']);
            $registerPassword = self::sanitizeData($_POST['password']);
            $registerUsertype = self::sanitizeData($_POST['usertype']);

            $model = new User();
            $model->setRegisterUser($registerUsername, $registerPassword, $registerUsertype);
        }
    }

    public function sucessRegistion(){

    }
    

    
//Cleans Data Entry
    public function sanitizeData($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }
}



