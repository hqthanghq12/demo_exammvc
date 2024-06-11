<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>
</head>
<body>
<?php //var_dump($idProduct); ?>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Name</label>
    <input type="text" name="name" id="" value="<?php echo $idProduct->name ?>">
    <label for="">Price</label>
    <input type="text" name="price" id="" value="<?php echo $idProduct->price ?>">
    <label for="">Image</label>
    <input type="file" name="image" id="">
    <img src="<?php echo $idProduct->image ?>" alt="" srcset="">
    <label for="">Quantyti</label>
    <input type="text" name="quantyti" id="" value="<?php echo $idProduct->price ?>">
    <input type="submit" name="btn-submit" value="Gửi">
</form>
</body>
</html>