<?php
    require_once 'controllers\UserController.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'views/users/register.php'?>

    <?php
        $action = isset($_GET['action'])  ?? "" ;
        if(isset($_GET['action'])){}
        switch($action){
            case 'register': 
                $userController = new UserController();
                $userController->userRegistration();
        }
    ?>
</body>
</html>