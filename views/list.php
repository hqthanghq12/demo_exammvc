<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang danh sách sản phẩm</title>
</head>
<body>
<a href="?act=addProduct"><button>Thêm dữ liệu</button></a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Image</td>
        <td>Quantity</td>
        <td>Status</td>
        <td>Hành Động</td>
    </tr>
    <?php
//    var_dump($listProduct);
        foreach ($listProduct as $value){
    ?>
    <tr>
        <td><?php echo $value->id ?></td>
        <td><?php echo $value->name ?></td>
        <td><?php echo $value->price ?></td>
        <td><img src="<?php echo $value->image ?>" alt=""></td>
        <td><?php echo $value->quantity ?></td>
        <td><?php echo $value->status ?></td>
        <td>
            <button>Sửa</button>
            <button>Xóa</button>
        </td>
    </tr>
    <?php }?>
</table>

</body>
</html>