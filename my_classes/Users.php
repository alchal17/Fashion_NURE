<?php
namespace my_classes;
class Users
{
    public string $name;
    public string $login;
    public string $password;

    public function __construct($name, $login, $password)
    {
        $this->name = $name;
        $this->login = $login;
        $this->password = $password;
    }

    public function __clone()
    {
        $this->name = "User";
        $this->login = "User";
        $this->password = "qwerty";
    }

    public function getInfo(): string
    {
        return $this->name . " " . $this->login . " " . $this->password;
    }

}