<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

if(isset($_POST['username'], $_POST['password'])){
    ['username'=>$username, 'password'=>$password] = $_POST;
    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPasswor($username, $password);
    if($user === null){
        $error = 'Неверный логин или пароль.';
        $_POST = [];
        $username = null;
    }else{
        $_SESSION['username'] = $user;
        header("Location: index.php");
        die;
    }
}

if(isset($_GET['action']) && $_GET['action'] === 'logout'){
    unset($_SESSION['username']);
    session_destroy();
    header("Location: index.php");
    die;
}

$username = null;
$page = 'security';

include "view/security.php";