<?php
// Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и
// text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче
// комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация,
// поэтому необходимо добавить соответствующее свойство и методы классу Task.
class User
{
    private string $name;
    private int $age;
    private string $sex;
    private ?string $email;
    private ?string $phone;
    public bool $isActive = true;
    private DateTime $createUser;

    public function __construct($name, $age, $sex, $email = null, $phone = null)
    {
        $this->createUser = new DateTime();
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName () : string
    {
        return $this->name;
    }
    public function getAge () : int
    {
        return $this->age;
    }
    public function getSex () : string
    {
        return $this->sex;
    }
    public function getEmail () : string
    {
        return $this->email;
    }
    public function getPhone () : string
    {
        return $this->phone;
    }
    public function getIsActive () :bool
    {
        return $this->isActive;
    }
    public function getCreateDate () : DateTime
    {
        return $this->createUser;
    }
}