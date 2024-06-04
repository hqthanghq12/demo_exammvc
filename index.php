<?php
require_once 'models/ConnectDatabase.php';
//$con = new ConnectDatabase();
require_once 'models/Product.php';
$dataPro = new Product();
var_dump($dataPro->getAllDataProduct());
