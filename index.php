<?php
require_once 'models/ConnectDatabase.php';
//$con = new ConnectDatabase();
// tất các file trong model đều nằm trên các file trong
// controller
require_once 'models/Product.php';
require_once 'contronllers/ProductController.php';
//$dataPro = new Product();
//var_dump($dataPro->getAllDataProduct());
$cPro = new ProductController();
//$cPro->listProduct();
//$cPro->addProduct();
// Menu chức năng
 $luaChon = isset($_GET['act'])?$_GET['act']:"/";
 switch ($luaChon){
     case 'listProduct':
         $cPro->listProduct();
         break;
     case 'addProduct':
         $cPro->addProduct();
         break;
     default:
         $cPro->listProduct();
         break;
 }

