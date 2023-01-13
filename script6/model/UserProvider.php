<?php

class UserProvider
{
    public array $accounts = [
        'admin' => '123',
        'taskman' => '123',
        'superman' => '123'
    ];

    public function getByUsernameAndPasswor (string $username, string $password) : ?User
    {
        $expentedPassword = $this->accounts[$username] ?? null;

        if($expentedPassword === $password){
            return new User($username);
        }

        return null;
    }
}