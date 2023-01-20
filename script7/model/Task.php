<?php

class Task
{
    private int $id;
    private string $description;
    private string $priority;
    private int $isDone;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone = null;
    private ?int $userId;

    public function __construct (int $id, string $description, string $priority, int $isDone, string $dateCreated, string $dateUpdated, ?string $dateDone, int $userId)
    {
        $this->id = $id;
        $this->description = $description;
        $this->priority = $priority;
        $this->isDone = $isDone;
        $this->dateCreated = new DateTime($dateCreated);
        $this->dateUpdated = new DateTime($dateUpdated);
        if($dateDone !== null){
            $this->dateDone = new DateTime($dateDone);
        }else{
            $this->dateDone = null;
        }
        $this->userId = $userId;
    }

    public function getId () : int
    {
        return $this->id;
    }
    public function getDescription () : string
    {
        return $this->description;
    }
    public function getPriority () : int
    {
        return $this->priority;
    }
    public function getIsDone () : int
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
    public function getUserId () : int
    {
        return $this->userId;
    }

    public function getArrayDataTaskForShow() : array
    {
        $arr = [];
        $arr['id'] = $this->getId();
        $arr['description'] = $this->getDescription();
        $arr['priority'] = $this->getPriority();
        $arr['isDone'] = $this->getIsDone ();
        $arr['dateCreated'] = $this->getDateCreated()->format('d-m-Y h:i:s');

        if($this->getDateUpdated() !== null){
            $arr['dateUpdated'] = $this->getDateUpdated()->format('d-m-Y h:i:s');
        }else{
            $arr['dateUpdated'] = null;
        }
        if($this->getDateDone() !== null){
            $arr['dateDone'] = $this->getDateDone()->format('d-m-Y h:i:s');
        }else{
            $arr['dateDone'] = null;
        }

        return $arr;
    }

}
