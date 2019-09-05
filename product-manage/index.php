<?php
include_once 'controller/C_Product.php';
$C_Product = new C_Product();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'add':
        $C_Product->add();
        break;
    default:
        $C_Product->getList();
        break;
}