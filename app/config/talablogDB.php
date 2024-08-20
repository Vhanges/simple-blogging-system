<?php

 class  Db{

    public $pdo;
    private $host =  "localhost";
    private $username =  "root";
    private $password =  "";
    private $dbName=  "talablogDB";

    protected function connect(){
        $credentials = "mysql:host=$this->host;dbname=$this->dbName";

        $pdo = new PDO($credentials, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->pdo = $pdo;
        return $pdo;

    }

}