<?php
namespace my_classes;
class SuperUsers extends Users
{
    public string $character;

    public function __construct($name, $login, $password, $character)
    {
        parent::__construct($name, $login, $password);
        $this -> $character;
    }
}