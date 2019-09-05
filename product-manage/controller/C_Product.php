<?php
include_once 'model/database/DBConnect.php';
include_once 'model/database/DBProduct.php';
include_once 'model/class/product.php';

class C_Product
{
    public $DBProduct;

    public function __construct()
    {
        $connection = new DBConnect();
        $this->DBProduct = new DBProduct($connection->connect());
    }

    public function getList()
    {
        $products = $this->DBProduct->getList();
        include 'view/product/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'view/product/add.php';
        } else {
            $productCode = $_POST['productCode'];
            $productName = $_POST['productName'];
            $productVendor = $_POST['productVendor'];
            $buyPrice = $_POST['buyPrice'];
            $MSRP = $_POST['MSRP'];
            $productStock = $_POST['productStock'];

            $product = new product($productName, $productVendor, $productStock, $buyPrice, $MSRP);
            $product->productCode = $productCode;
            $this->DBProduct->add($product);

            header('localhost: index.php');
        }
    }
}