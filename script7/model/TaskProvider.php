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

    public function setIsDoneTask (int $key) : void
    {
        $_SESSION['task'][$key]->setIsDone();
    }

    public function setRemoveTask ($key) : void
    {
        array_splice($_SESSION['task'], $key, 1);
    }
}
