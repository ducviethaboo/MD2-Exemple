<?php
include_once "../controller/ProductController.php";
$conn = new ProductController();
$product = $conn->showProductById();
$conn->editProductConntroler();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: lightskyblue;
        }
        .table {
            background-color: white;
        }
        a {
            color: white;
        }
        th {
            text-align: center;
        }
    </style>
</head>
<body>
<!--<h2>Chỉnh sửa mặt hàng</h2>-->
<!--<form method="post">-->
<!--    <input type="hidden" name="id" value="--><?php //echo $product['productCode']?><!--">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td>Tên hàng:</td>-->
<!--            <td><input type="text" name="name" value="--><?php //echo $product['productName'] ?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Loại hàng:</td>-->
<!--            <td><input type="text" name="type" value="--><?php //echo $product['productType'] ?><!--">-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Giá:</td>-->
<!--            <td><input type="text" name="price" value="--><?php //echo $product['buyPrice'] ?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Số lượng:</td>-->
<!--            <td><input type="text" name="count" value="--><?php //echo $product['productCount'] ?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Ngày  mua:</td>-->
<!--            <td><input type="text" name="date" value="--><?php //echo $product['productDate']?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>Mô tả:</td>-->
<!--            <td><input type="text" name="note" value="--><?php //echo $product['productDesc'] ?><!--"></td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <td>-->
<!--                <button type="submit">Sửa</button>-->
<!--                <a href="">Trở về</a></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
<br><br><br>
<form method="POST">
    <table align="center" class="table" style="width: auto; border-radius: 15px">
        <thead class="thead-dark">
        <input type="hidden" name="id" value="<?php echo $product['productCode']?>">
        <tr>
            <th colspan="2"><h1><b>Chỉnh sửa mặt hàng</b></h1></th>
        </tr>
        <tr>
            <td>Tên hàng</td>
            <td><input style="width: 280px" name="name" type="text" required value="<?php echo $product["productName"]; ?>"></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td><input style="width: 280px" name="type" type="text" required value="<?php echo $product["productType"]; ?>"></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input name="price" style="width: 280px" type="text" required value="<?php echo $product["buyPrice"]; ?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input name="count" style="width: 280px" type="text" required value="<?php echo $product["productCount"]; ?>"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input name="note" style="width: 280px" type="text" required value="<?php echo $product["productDesc"]; ?>"></td>
        </tr>
        <tr>
        <tr>
            <td>
                <a class="btn btn-warning" href="list.php">Trở về</a>
            </td>
            <td>
                <button style="width: 200px" class="btn btn-success" type="submit">Cập nhật</button>
            </td>
        </tr>
        </thead>
    </table>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

