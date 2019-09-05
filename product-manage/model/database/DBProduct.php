<?php
include_once 'model/class/product.php';

class DBProduct
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getList()
    {
        $stmt = "SELECT p.productCode,p.productName,p.productVendor,p.quantityInStock,p.buyPrice,p.MSRP FROM products p;";
        $query = $this->connection->prepare($stmt);
        $query->execute();
        $result = $query->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new product($row['productName'], $row['productVendor'], $row['quantityInStock'], $row['buyPrice'], $row['MSRP']);
            $product->productCode = $row['productCode'];
            $products[] = $product;
        }
        return $products;
    }

    public function add($product){
        $stmt = "INSERT INTO products(productCode,productName,productVendor,quantityInStock,buyPrice,MSRP) VALUES (:productCode,:productName,:productVendor,:quantityInStock,:buyPrice,:MSRP);";
        $query = $this->connection->prepare($stmt);
        $query->bindParam(':productCode',$product->productCode);
        $query->bindParam(':productName',$product->productName);
        $query->bindParam(':productVendor',$product->productVendor);
        $query->bindParam(':quantityInStock',$product->productStock);
        $query->bindParam(':buyPrice',$product->productPrice);
        $query->bindParam(':MSRP',$product->MSRP);
        $query->execute();
    }
}