<?php


class Customer
{
    public $id;
    public $name;
    public $email;
    public $address;

    public function __construct($name, $address, $email)
    {
        $this->name = $name;
        $this->address = $address;
        $this->email = $email;
    }


}