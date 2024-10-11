<?php 
class Controller {
    
    public function view($filename = '', $data = [])
    {
        require_once "../app/views/$filename.php";
    }

    
} 
