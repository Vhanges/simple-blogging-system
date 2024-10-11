<?php
require_once '../app/core/Controller.php';
require_once '../app/models/User.php';

class TestController extends Controller{
    private $pdo;
    public function __construct(){
        $this->pdo = new PDO('mysql:host=localhost;dbname=talablogdb', 'root', '');
    }
    public function index()
    {
        echo 'home/index';                                                                                                       
    }
    public function show()
    {
        $User = new User(pdo: $this->pdo);
        $Users = $User->getAll();
        var_dump($Users);
        $this->view('users/test', ['name' => 'anjsdailu']);
    }


}


