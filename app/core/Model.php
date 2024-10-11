<?php 

class Model{

    private $pdo;
    protected $table = '';
    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getAll(){
        $stmt = $this->pdo->query("SELECT * FROM $this->table");
        $models = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $models;
    }

    public function get($id){

    }

    public function store($id){

    }

    public function update($id){

    }

    public function delete($id){

    }

     
}