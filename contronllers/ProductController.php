<?php
class ProductController{
    // Mỗi 1 chức tuong úng vơi 1 phuong thuc (hay 1 hàm)
    // CRUD
    // Hiện thi
    // Thêm dữ liệu
    // Sửa dữ liêu
    // Xóa liệu

    // Hiển thị tất cả dữ liệu
    public function listProduct(){
        $modelProduct = new Product();
        $listProduct = $modelProduct ->getAllDataProduct();
        include_once 'views/list.php';
    }
    public function addProduct(){
        // Kiểm tra xem ngdung co bam gui k
        if(isset($_POST['btn-submit'])){
            $name = $_POST['name'];
            $price = $_POST['price'];
            $quantyti = $_POST['quantyti'];
//            var_dump($name);
            // Upload file
            // Lấy đường dẫn đến thư mục chứa ảnh
            $target_dir = "images/";
            // lấy tên file
            $name_img = time().$_FILES['image']['name'];
            // Ghép tên và thư mục
            $target_path = $target_dir.$name_img;
            // upload anh vào thư mục
            move_uploaded_file($_FILES['image']['tmp_name'],$target_path);
            // Thêm co so du lieu
            $modelProduct = new Product();
            $check =$modelProduct->setInsertDataProduct(null,$name,$price, $target_path, $quantyti,1);

        }
        include_once 'views/add.php';
    }
    // Sửa
    // Sủa cái gì -> id (khóa chinh)
    // Hiển thi được ndung dã nhạp trước khi sua
    // Đảm bao chinh xác du lieu
    public function  editProduct(){
        if(isset($_GET['id'])){
//            echo $_GET['id'];
            // Hiện thi lại nhung thong tin ngươi dung dã nhap
            $mProduct = new Product();
            $idProduct = $mProduct->getIdProduct($_GET['id']);
// thực hiện upload
            if(isset($_POST['btn-submit'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $quantyti = $_POST['quantyti'];
                if ($_FILES['image']['name'] != null) {
                    // upload anh mơi
                    $target_dir = "images/";
                    // lấy tên file
                    $name_img = time() . $_FILES['image']['name'];
                    // Ghép tên và thư mục
                    $image = $target_dir . $name_img;
                    // upload anh vào thư mục
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_path);
                } else {
                    // K upload gưi anh cũ
                    $image = $idProduct->image;
                }
                $check = $mProduct->updateProduct($name, $price, $image, $quantyti, 1,$_GET['id']);
            }
        }
        include_once 'views/edit.php';
    }
    public function deleteProduct(){
        if (isset($_GET['id'])){
//            echo $_GET['id'];
            $mProduct = new Product();
            $check = $mProduct->deleteProduct($_GET['id']);
            header('Location: index.php');
        }
    }

}