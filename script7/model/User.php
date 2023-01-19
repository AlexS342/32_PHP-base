<?php

class User 
{
    private string $name;
    private string $username;

    public function __construct (string $username)
    {
        $this->username = $username;
    }

    public function getId () : int
    {
        return $this->id;
    }
    public function getUsername () : string
    {
        return $this->username;
    }

    public function getName () : string
    {
        return $this->name;
    }

    public function setName ($name) : void
    {
        $this->name = $name;
    }

    public function setUserName ($username) : void
    {
        $this->username = $username;
    }
}