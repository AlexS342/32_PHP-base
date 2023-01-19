<?php

class TaskProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function addTask (string $description, int $priority, /*User $author*/) : void
    {
        $isDone = 0;
        $date = new DateTime();
        $dateCreated = $date->format('d-m-Y h:i:s');
        $dateUpdated = $date->format('d-m-Y h:i:s');
        $userId = $_SESSION['username']->getId();

        $arr = [$description, $priority, $isDone, $dateCreated, $dateUpdated, $userId];
        $newTask = $this->pdo->prepare("INSERT INTO tasks (description, priority, isDone, dateCreated, dateUpdated, userId) values (:description, :priority, :isDone, :dateCreated, :dateUpdated, :userId)");
        $newTask->execute($arr);
    }

    public function getAllTasksBD () : ?array
    {
        $userId = $_SESSION['username']->getId();
        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE userId=$userId");
        return $selectAllTask->fetchAll();
    }

    public function getNotIsDoneTasksBD () : ?array
    {
        $userId = $_SESSION['username']->getId();
        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE isDone=0 AND userId=$userId");
        return $selectAllTask->fetchAll();
    }

    public function getIsDoneTasksBD () : ?array
    {
        $userId = $_SESSION['username']->getId();
        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE isDone=1 AND userId=$userId");
        return $selectAllTask->fetchAll();
    }

    //Функции getAllTasksBD2, getNotIsDoneTasksBD2 и getIsDoneTasksBD2 пока еще в разработке для использования класса Task
//    public function getAllTasksBD2 () : void
//    {
//        $userId = $_SESSION['username']->getId();
//        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE userId=$userId");
//        $selectAllTaskArr = $selectAllTask->fetchAll();
//        $_SESSION['tasksClass'] = [];
//        foreach($selectAllTaskArr as $arrTask)
//        {
//            $obj = new Task(...$arrTask);
//            $_SESSION['tasksClass'][] = $obj;
//        }
//    }
//    public function getNotIsDoneTasksBD2 () : void
//    {
//        $userId = $_SESSION['username']->getId();
//        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE isDone=0 AND userId=$userId");
//        $selectAllTaskArr = $selectAllTask->fetchAll();
//        $_SESSION['tasksClass'] = [];
//        foreach($selectAllTaskArr as $arrTask)
//        {
//            $obj = new Task(...$arrTask);
//            $_SESSION['tasksClass'][] = $obj;
//        }
//    }
//    public function getIsDoneTasksBD2 () : void
//    {
//        $userId = $_SESSION['username']->getId();
//        $selectAllTask = $this->pdo->query("SELECT * FROM tasks WHERE isDone=1 AND userId=$userId");
//        $selectAllTaskArr = $selectAllTask->fetchAll();
//        $_SESSION['tasksClass'] = [];
//        foreach($selectAllTaskArr as $arrTask)
//        {
//            $obj = new Task(...$arrTask);
//            $_SESSION['tasksClass'][] = $obj;
//        }
//    }

    public function setIsDoneTaskBD (int $id) : void
    {
        $userId = $_SESSION['username']->getId();
        $date = new DateTime();
        $dateDone = $date->format('d-m-Y h:i:s');
        $isDone = 1;
        $arr = [$isDone, $dateDone, $id, $userId];
        $updateTask = $this->pdo->prepare("UPDATE tasks SET isDone = :isDone, dateDone = :dateDone WHERE id = :id AND userId = :userId");
        $updateTask->execute($arr);
    }

    public function setRemoveTaskBD(int $id) : void
    {
        $userId = $_SESSION['username']->getId();
        $arr = [$id, $userId];
        $updateTask = $this->pdo->prepare("DELETE FROM tasks WHERE id = :id AND userId = :userId");
        $updateTask->execute($arr);
    }
}
