<?php
include_once './model/database/DBConnect.php';
include_once './model/database/DBStudent.php';

class C_Students
{
    public $DBStudent;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBStudent = new DBStudent($connection->connect());
    }

    public function create()
    {
        include './view/student/add.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];

            $student = new Student($name,$pass,$email);
            $this->DBStudent->create($student);
        }
    }
}