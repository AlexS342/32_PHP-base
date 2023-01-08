<?php

class TaskProvider
{
    public function addTask (string $description, int $priority, User $author)
    {
        if(!isset($_SESSION['task'])){
            $_SESSION['task'] = [];
        }
        $_SESSION['task'][] = new Task($description, $priority, $author);
    }

//Так как get-методы отдают масив для вывода данных на странице, решено наполнять массив готовыми строками
//(см. Task.php getArrayDataTask() {58})

    public function getArrayAllDataTask () : array
    {
        $arrayAllTask = [];
        foreach($_SESSION['task'] as $arr)
        {
            $arrayAllTask[] = $arr->getArrayDataTask();
        }
        return $arrayAllTask;
    }

    public function getArrayNotDoneTask() : array
    {
        $arrayNotDoneTask = [];
        $arrayAllTask = $this->getArrayAllDataTask();

        foreach($arrayAllTask as $key => $array)
        {
            if(!$array['isDone']){
                $arrayNotDoneTask[$key] = $array;
            }
        }
        return $arrayNotDoneTask;
    }

    public function getArrayDoneTask() : array
    {
        $arrayNotDoneTask = [];
        $arrayAllTask = $this->getArrayAllDataTask();

        foreach($arrayAllTask as $key => $array)
        {
            if($array['isDone']){
                $arrayNotDoneTask[$key] = $array;
            }
        }
        return $arrayNotDoneTask;
    }
}
/*
array(1) { 
[0]=> object(Task)#3 (7) 
{ 
    ["description":"Task":private]=> string(21) "Выпить кофе" 
    ["priority":"Task":private]=> int(3) 
    ["isDone":"Task":private]=> bool(false) 
    ["dateCreated":"Task":private]=> object(DateTime)#4 (3) 
    { 
        ["date"]=> string(26) "2023-01-04 22:16:25.104726" 
        ["timezone_type"]=> int(3) 
        ["timezone"]=> string(12) "Asia/Karachi" 
    } 
    ["dateUpdated":"Task":private]=> object(DateTime)#5 (3) 
    { 
        ["date"]=> string(26) "2023-01-04 22:16:25.104765" 
        ["timezone_type"]=> int(3) 
        ["timezone"]=> string(12) "Asia/Karachi" 
    } 
    ["dateDone":"Task":private]=> NULL 
    ["user":"Task":private]=> object(User)#1 (1) 
    { 
        ["username":"User":private]=> string(5) "admin" 
    } 
} 
*/