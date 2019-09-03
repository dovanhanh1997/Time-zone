<?php
include_once './model/database/DBConnect.php';
include_once './model/database/DBCustomer.php';
include_once './model/class/Customer.php';

class C_Customer
{
    public $DBCustomer;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBCustomer = new DBCustomer($connection->connect());

    }


    public function add()
    {
        include './view/customer/add.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            var_dump($name);
            $customer = new Customer($name, $email, $address);
            $this->DBCustomer->create($customer);
        }
    }

    public function renderCustomers()
    {
        $customers = $this->DBCustomer->getCustomers();
        include './view/customer/render.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $customer = $this->DBCustomer->getCustomer($id);
            include 'view/customer/delete.php';
        } else {
            $id = $_POST['id'];
            $this->DBCustomer->delete($id);
            header('location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            $customer = $this->DBCustomer->getCustomer($id);
            include 'view/customer/update.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['address'], $_POST['email']);
            $this->DBCustomer->update($id,$customer);
            header('location: index.php');
        }
    }
}