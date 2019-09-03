<?php


class DBStudent{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($student){
        $sqlStatement = "INSERT INTO students (name,pass,email) VALUES (:name,:pass,:email)";
        $query = $this->connection->prepare($sqlStatement);
        $query->bindParam(':name',$student->name);
        $query->bindParam(':pass',$student->pass);
        $query->bindParam(':email',$student->email);
        return $query->execute();
    }


}