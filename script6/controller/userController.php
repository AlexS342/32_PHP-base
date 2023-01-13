<?php

require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

session_start();

if($_SESSION['username'] === null){
    header("Location: /?controller=404");
    die;
}

$username = null;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username']->getUsername();
}

$page ='user';

include "view/user.php";