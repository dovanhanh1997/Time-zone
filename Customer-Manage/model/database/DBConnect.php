<?php

class DBConnect{
    public $servername;
    public $username;
    public $password;
    public $connection;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'hanhphp';
        $this->password = 'dovanHanh1997';
    }

    public function connect(){
        try{
            $this->connection = new PDO("mysql:host=".$this->servername.";dbname=customer_manage",$this->username,$this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $this->connection;
        } catch (PDOException $exception){
            return 'Connect Failed: '.$exception->getMessage();
        }
    }

    public function closeConnect(){

        $this->connection = null;
    }


}