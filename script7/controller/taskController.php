<?php

require_once 'model/User.php';
require_once 'model/Task.php';
require_once 'model/TaskProvider.php';

session_start();

if($_SESSION['username'] === null){
    header("Location: /?controller=404");
    die;
}

$pdo = require 'db.php';

$taskProvider = new TaskProvider($pdo);

if(isset($_POST['description']) && $_POST['description'] !== ''){
    $taskProvider->addTask($_POST['description'], (int) $_POST['priority'], /*$user*/);
}

if(isset($_GET['doneTask']) && $_GET['doneTask'] === 'TRUE'){
    $taskProvider->setIsDoneTaskBD($_GET['doneTaskID']);
}

if(isset($_GET['removeTask']) && $_GET['removeTask'] === 'TRUE'){
    $taskProvider->setRemoveTaskBD($_GET['removeTaskID']);
}

if(isset($_GET['show']) && $_GET['show'] === 'allTask' || !isset($_GET['show'])){
    $_SESSION['showTasks'] = 'allTask';
}

if(isset($_GET['show']) && $_GET['show'] === 'notDone'){
    $_SESSION['showTasks'] = 'notDone';
}

if(isset($_GET['show']) && $_GET['show'] === 'done'){
    $_SESSION['showTasks'] = 'done';
}

$dataTask = [];
$_SESSION['selectTasks'] = [];

if($_SESSION['showTasks'] === 'allTask'){
    $dataTask2 = $taskProvider->getAllTasksBD();
    foreach ($dataTask2 as $itemDataTask)
    {
//        $dataTask[] = $itemDataTask->getArrayDataTaskForShow();
        $_SESSION['selectTasks'][] = $itemDataTask->getArrayDataTaskForShow();
    }
}

if($_SESSION['showTasks'] === 'notDone'){
    $dataTask2 = $taskProvider->getNotIsDoneTasksBD();
    foreach ($dataTask2 as $itemDataTask)
    {
//        $dataTask[] = $itemDataTask->getArrayDataTaskForShow();
        $_SESSION['selectTasks'][] = $itemDataTask->getArrayDataTaskForShow();
    }
}

if($_SESSION['showTasks'] === 'done'){
    $dataTask2 = $taskProvider->getIsDoneTasksBD();
    foreach ($dataTask2 as $itemDataTask)
    {
//        $dataTask[] = $itemDataTask->getArrayDataTaskForShow();
        $_SESSION['selectTasks'][] = $itemDataTask->getArrayDataTaskForShow();
    }
}

$page ='task';

include "view/task.php";
