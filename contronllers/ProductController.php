<?php
class ProductController{
  // Mỗi chức năng thì tương ưng 1 phương thức
    // Hiển thi danh sách sản phẩm
    public function listProduct(){
        // Khởi tạo Product
        $mPro = new Product();
        $listProduct = $mPro->getAllDataProduct();
//        var_dump($listProduct);
        include_once 'views/list.php';
    }
    public function addProduct(){
        include_once 'views/add.php';
    }

}