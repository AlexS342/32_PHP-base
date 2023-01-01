<?php
//// Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные
//// свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User).
//// В качества класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые
//// для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение
//// свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства
//// dateUpdated и dateDone.

class Task
{
    private string $description;
    private int $priority;
    private bool $isDone = false;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone = null;
    private User $user;

    public function __construct(string $description, int $priority, User $user)
    {
        $this->setDescription($description);
        $this->setDateUpdated();
        $this->setPriority ($priority);
        $this->dateCreated = new DateTime();
        $this->user = $user;
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

    private function setDescription (string $description) :void
    {
        $this->description = $description;
    }
    private function setPriority (int $i) : void
    {
        $this->priority = $i;
    }
    private function setIsDone () : void
    {
        $this->isDone = true;
    }
    private function setDateUpdated () : void
    {
        $this->dateUpdated = new DateTime();
    }
    private function setDateDone () : void
    {
        $this->dateDone = new DateTime();
    }

    public function editDescription (string $description) : void
    {
        $this->setDescription($description);
        $this->setDateUpdated();
    }
    public function editPriority ($priority) : void
    {
        $this->setPriority($priority);
        $this->setDateUpdated();
    }
    public function markAsDone () : void
    {
        $this->setDateUpdated();
        $this->setIsDone();
        $this->setDateDone();
    }
}