<?php
include 'controller/C_Customer.php';
$controller = new C_Customer();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page){
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    default:
        $controller->renderCustomers();
        break;
}
