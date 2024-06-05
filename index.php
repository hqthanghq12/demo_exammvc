<?php
require_once 'models/ConnectDatabase.php';
//$con = new ConnectDatabase();
require_once 'models/Product.php';
require_once 'contronllers/ProductController.php';
//$dataPro = new Product();
//var_dump($dataPro->getAllDataProduct());
//$cPro = new ProductController();
//$cPro->listProduct();
//$cPro->addProduct();
// tạo ra menu để điều hướng
$luaChon = isset($_GET['act'])? $_GET['act'] : "/" ;
switch ($luaChon){
    case 'listProduct':
        $cPro = new ProductController();
        $cPro->listProduct();
        break;
    case 'addProduct':
        $cPro = new ProductController();
        $cPro->addProduct();
        break;
    default:
        $cPro = new ProductController();
        $cPro->listProduct();
        break;
}
