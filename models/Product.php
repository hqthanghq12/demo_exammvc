<?php
require_once 'ConnectDatabase.php';
class Product{
    // tao ra 1 thuoc tinh ket noi csdl
    public $connect;
    // dung pt khoi tao ket noi csdl
    public function __construct()
    {
        $this->connect = new ConnectDatabase();
    }
    // Moi 1 cau lenh sql thi nen tao ra 1 pt rieng
    // Hien thi tat ca du lieu co trong

    public function getAllDataProduct(){
        // b1: tao bien chua chuoi sql
        // tip: can phai chay truoc cau lenh sql tren
        // mysql de dam bao cau lenh luon dung
        $sql = "SELECT * FROM `products`";
        // b2: dung thuoc tinh knoi voi CSDL goi den
        // ham sesetQuery
        $this->connect->setQuery($sql);
        // b3: tra ve ket qua
        return $this->connect->loadData();
    }
}