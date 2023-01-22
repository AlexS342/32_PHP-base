<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$pdo = require 'db.php';

if(isset($_POST['username'], $_POST['password'], $_GET['action']) && $_GET['action'] == 'enter'){
    ['username'=>$username, 'password'=>$password] = $_POST;
    $userProvider = new UserProvider($pdo);
    $user = $userProvider->getByUsernameAndPasswor($username, $password);
    if($user === null){
        $error = 'enterUserNotFound';
        $_POST = [];
        $_GET = [];
        $username = null;
    }else{
        $_SESSION['username'] = $user;
        $error = null;
        header("Location: index.php");
        die;
    }
}

if(isset($_POST['username'], $_POST['password'], $_GET['action']) && $_GET['action'] == 'registration'){
    ['username'=>$username, 'password'=>$password] = $_POST;
    $userProvider = new UserProvider($pdo);
    if($userProvider->searchUserInUsersByUsername($username)){
        $_POST = [];
        $_GET = [];
        $error = 'registrationUserExists';
    }else{
        $user = new User($username);
        $user->setName('Новый пользователь');
        $userProvider->registerUser($user, '123');
        $user = $userProvider->getByUsernameAndPasswor($username, $password);
        $_SESSION['username'] = $user;
        $error = null;
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