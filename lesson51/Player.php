<?php

class Player
{
    private string $name;
    private int $age;
    private string $sex;
    private int $life = 100;
    private int $attack = 15;
    public ?string $email;
    public ?string $phone;
    public bool $isActive = true;
    private DateTime $createUser;

    public function __construct($name, $age, $sex)
    {
        $this->createUser = new DateTime();
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function init($email, $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
    }
    private function getCreateDate () : string
    {
        return $this->createUser->format('d.m.Y H:i:s');
    }
    public function getHallo ()
    {
        echo "Моё имя $this->name, мне $this->age, я $this->sex. \n";
        //echo "Я создан $this->data. \n";
        echo "Ты можешь позвонить мне на номер $this->phone,\n";
        echo "Или написать мне на e-mail: $this->email.\n";
        echo "Меня создали " . $this->getCreateDate() . " \n";

    }
    public function attackUser (Player $user)
    {
        echo $this->name . " ударяет " . $user->name . "\n";
        $user->life -= $this->attack;
        echo "У " . $user->name . " осталось " . $user->life . " единиц здоровья\n";
    }
}