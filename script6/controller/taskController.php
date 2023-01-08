<?php

require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

session_start();

$username = null;
if(isset($_SESSION['username'])){
    $user = $_SESSION['username'];
    $username = $user->getUsername();
    $taskProvider = new TaskProvider();

    if(isset($_POST['discription'])){
        $taskProvider->addTask($_POST['discription'], (int) $_POST['priority'], $user);
    }

    if(isset($_GET['doneTask']) && $_GET['doneTask'] === 'TRUE'){
        $_SESSION['task'][$_GET['doneTaskID']]->setIsDone();
    }

    if(isset($_GET['removeTask']) && $_GET['removeTask'] === 'TRUE'){
        array_splice($_SESSION['task'], $_GET['removeTaskID'], 1);
    }

    $dataTask = $taskProvider->getArrayAllDataTask();

    if($_GET['show'] === 'allTask'){
        $_SESSION['showTasks'] = 'allTask';
    }

    if($_GET['show'] === 'notDone'){
        $_SESSION['showTasks'] = 'notDone';
    }

    if($_GET['show'] === 'done'){
        $_SESSION['showTasks'] = 'done';
    }

    if($_SESSION['showTasks'] === 'notDone'){
        $dataTask = $taskProvider->getArrayNotDoneTask();
    }

    if($_SESSION['showTasks'] === 'done'){
        $dataTask = $taskProvider->getArrayDoneTask();
    }

    $show = $_SESSION['showTasks'];
}

$_POST = [];
$_GET = [];

$page ='task';

include "view/task.php";
