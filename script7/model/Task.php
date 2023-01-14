<?php

class Task
{
    private string $description;
    private int $priority;
    private bool $isDone = false;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone = null;
    private User $user;

    public function __construct (string $description, int $priority, User $author)
    {
        $this->description = $description;
        $this->priority = $priority;
        $this->user = $author;
        $this->dateCreated = new DateTime();
        $this->dateUpdated = new DateTime();
    }

    public function getDescription () : string
    {
        return $this->description;
    }
    public function getPriority () : int
    {
        return $this->priority;
    }
    public function getIsDone () : bool
    {
        return $this->isDone;
    }
    public function getDateCreated () : DateTime
    {
        return $this->dateCreated;
    }
    public function getDateUpdated () : ?DateTime
    {
        return $this->dateUpdated;
    }
    public function getDateDone () : ?DateTime
    {
        return $this->dateDone;
    }
    public function getUser () : User
    {
        return $this->user;
    }

    public function setIsDone () : void
    {
        $this->isDone = true;
        $this->dateUpdated = new DateTime();
        $this->dateDone = new DateTime();
    }

    public function getArrayDataTask() : array
    {
        $arr = [];
        $arr['description'] = $this->description;
        $arr['priority'] = $this->priority;
        $arr['isDone'] = $this->isDone;
        $arr['dateCreated'] = $this->getDateCreated()->format('d-m-Y h:i');

        if($this->getDateUpdated() !== null){
            $arr['dateUpdated'] = $this->getDateUpdated()->format('d-m-Y h:i');
        }else{
            $arr['dateUpdated'] = null;
        }
        if($this->getDateDone() !== null){
            $arr['dateDone'] = $this->getDateDone()->format('d-m-Y h:i');
        }else{
            $arr['dateDone'] = null;
        }

        $arr['user'] = $this->getUser()->getUsername();

        return $arr;
    }

}
