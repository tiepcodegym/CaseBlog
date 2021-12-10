<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="container">
<a href="index.php?page=post-list">Post</a>
<a href="index.php?page=user-list">User</a>

<?php
session_start();

include_once "app/controllers/UserController.php";
include_once "app/controllers/AuthController.php";
include_once "app/controllers/PostController.php";
$userController = new UserController();
$authController = new AuthController();
$postController = new PostController();

$page = isset($_GET['page'])? $_GET["page"] : null;
switch ($page){
    case "user-list":
        $userController->showAll();
        break;
    case "user-create":
        $userController->create();
        break;
    case "user-delete":
        $userController->delete();
        break;
    case "user-update":
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $userController->edit();
        }else{
            $userController->update();
        }
        break;
    case "login":
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $authController->showLogin();
        }else{
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logout();
        break;
    case "user-detail":
        $userController->detail();
        break;
    case "post-list":
        $postController->showAll();
        break;
    case "post-create":
        $postController->create();
        break;
    case "post-delete":
        $postController->delete();
        break;
    case "post-update":
        if($_SERVER["REQUEST_METHOD"]=="GET"){
            $postController->edit();
        }else{
            $postController->update();
        }
        break;
    default:
//        header("Location:index.php?page=login");

}

?>

</body>
</html>
