<?php

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function name() {
        return $this->name;
    }

    public function age() {
        return $this->age;
    }
}

