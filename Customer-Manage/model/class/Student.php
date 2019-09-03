<?php

class Student
{
    public $name;
    public $pass;
    public $email;

    public function __construct($name, $pass, $email)
    {
        $this->name = $name;
        $this->pass = $pass;
        $this->email = $email;
    }
}