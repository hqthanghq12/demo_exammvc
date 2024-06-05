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
    <a href="?act=addProduct"><button>Thêm sản phẩm</button></a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Giá</td>
            <td>Hình ảnh</td>
            <td>Số lượng</td>
            <td>Trạng Thái</td>
            <td>Hành động</td>
        </tr>
        <?php
//        var_dump($listProduct);
            foreach ($listProduct as $value){
        ?>
        <tr>
            <td><?php echo $value->id?></td>
            <td><?php echo $value->name?></td>
            <td><?php echo $value->price?></td>
            <td><?php echo $value->image?></td>
            <td><?php echo $value->quantity?></td>
            <td><?php echo $value->status?></td>
            <td>Hành động</td>
        </tr>
        <?php }?>
    </table>
</body>
</html>