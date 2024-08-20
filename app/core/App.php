<?php
require_once 'Router.php';



    Router::get('/test', function(){
        echo "Hello Wao";
    });

    
    
    Router::get('/test/wao', function(){
        echo "Hello sdWao";
    });


    //**First Method


    // protected $controller = 'home';

    // protected $method = 'index';

    // protected $params = [];
    // public function __construct()
    // {

    //     // Get the url controller, method, and parameters
    //     $url = $this->parseUrl();

    //     // print_r($url);

    //     //Checks if the file exists
    //     if(file_exists("../app/controllers/$url[0].php"))
    //     {
    //         $this->controller = $url[0];
    //         unset($url[0]);
    //     }
        
        
    //     //Add the file in the webpage(Required)
    //     require_once "../app/controllers/$this->controller.php";

    //     //Instantiate the object and class based on the first index(Controller or Class) of the url
    //     $this->controller = new $this->controller;

    //     //Checks if the second index of the url has data
    //     if(isset($url[1]))
    //     {
    //         //Checks if second index is a method in the Class
    //         if(method_exists($this->controller, $url[1])){
    //             $this->method = $url[1];
    //             unset($url[1]);
    //         }
    //     }

    //     //Assign the third index(Parameters) to params variable
    //     $this->params = $url ? array_values($url) : []; 
    //     // print_r($url);


    //     //Calls the function/method in the class specified
    //     //[Class, Method], Parameter
    //     call_user_func_array([$this->controller, $this->method], $this->params);

    // }

    function parseUrl()
    {
        if(isset($_GET['url']))
        {
            //Get the url/link of the webpage then convert it into array
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }