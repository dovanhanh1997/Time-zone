<?php


class DBCustomer
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        echo 1;
        $query = $this->connection->prepare("INSERT INTO customers (name,email,address) VALUES (:name,:email,:address);");
        $query->bindParam(':name', $customer->name);
        $query->bindParam(':email', $customer->email);
        $query->bindParam(':address', $customer->address);
        var_dump($query->bindParam(':address', $customer->address));
        return $query->execute();
    }

    public function getCustomers()
    {
        $query = $this->connection->prepare("SELECT * FROM customers");
        $query->execute();
        $result = $query->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['address'], $row['email']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function getCustomer($id)
    {
        $sql = "SELECT * FROM customers WHERE id = :id";
        $query = $this->connection->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $row = $query->fetch();
        $customer = new Customer($row['name'], $row['address'], $row['email']);
        $customer->id = $row['id'];
        return $customer;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customers WHERE id = :id";
        $query = $this->connection->prepare($sql);
        $query->bindParam(":id", $id);
        var_dump($query);
        return $query->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customers SET name=:name,email=:email,address=:address WHERE id=:id;";
        $query = $this->connection->prepare($sql);
        $query->bindParam(':name', $customer->name);
        $query->bindParam(':email', $customer->email);
        $query->bindParam(':address', $customer->address);
        $query->bindParam(':id', $id);
        var_dump($sql);
        return $query->execute();
    }

}

