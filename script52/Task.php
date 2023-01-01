<?php
// Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и
// text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче
// комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация,
// поэтому необходимо добавить соответствующее свойство и методы классу Task.
class Task
{
    private string $description;
    private int $priority;
    private bool $isDone = false;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private ?DateTime $dateDone = null;
    private User $user;
    private array $comments = [];

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
    public function getComments() : array
    {
        return $this->comments;
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
    public function setComments (Comment $comment) : void
    {
        $this->comments[] = $comment;
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