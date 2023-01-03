<?php

require_once 'model/User.php';
require_once 'model/UserProvider.php';

session_start();

$username = null;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $username = $user->getUsername();
}

include "view/index.php";