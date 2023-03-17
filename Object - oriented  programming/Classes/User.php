<?php

class User{
    private $username;
    private $password;

    public function __construct(string $username,int $password){
        $this->username=$username;
        $this->password=$password;
    }
    public function getUsername(): string{
        return $this->username;
    }
    public function getPassword(): int{
        return $this->password;
    }
}

$new = new User("Nikolay", 359);
echo $new -> getUsername().PHP_EOL;
echo $new -> getPassword();