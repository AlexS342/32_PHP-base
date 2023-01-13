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

$user = $_SESSION['username'];
$username = $user->getUsername();
$taskProvider = new TaskProvider();

if(isset($_POST['discription']) && $_POST['discription'] !== ''){
    $taskProvider->addTask($_POST['discription'], (int) $_POST['priority'], $user);
}

if(isset($_GET['doneTask']) && $_GET['doneTask'] === 'TRUE'){
    $taskProvider->setIsDoneTask($_GET['doneTaskID']);
}

if(isset($_GET['removeTask']) && $_GET['removeTask'] === 'TRUE'){
    $taskProvider->setRemoveTask($_GET['removeTaskID']);
}

if(isset($_SESSION['task'])){
    $dataTask = $taskProvider->getArrayAllDataTask();
}else{
    $dataTask = [];
}

if(isset($_GET['show']) && $_GET['show'] === 'allTask'){
    $_SESSION['showTasks'] = 'allTask';
}

if(isset($_GET['show']) && $_GET['show'] === 'notDone'){
    $_SESSION['showTasks'] = 'notDone';
}

if(isset($_GET['show']) && $_GET['show'] === 'done'){
    $_SESSION['showTasks'] = 'done';
}

if(isset($_SESSION['showTasks']) && $_SESSION['showTasks'] === 'notDone'){
    $dataTask = $taskProvider->getArrayNotDoneTask();
}

if(isset($_SESSION['showTasks']) && $_SESSION['showTasks'] === 'done'){
    $dataTask = $taskProvider->getArrayDoneTask();
}

$show = $_SESSION['showTasks'] ?? 'allTask';


if(isset($_POST['discription']) || isset($_GET['doneTask']) || isset($_GET['removeTask'])  || isset($_GET['show'])){
    header("Location: /?controller=task");
    die;
}

$page ='task';

include "view/task.php";
