<?php
include_once "../controller/ProductController.php";
$conn = new ProductController();
$listproduct = $conn->showAll();
$conn->search();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            background-color: lightskyblue;
        }

        .table {
            background-color: white
        }

        a {
            color: white;
        }

        th {
            text-align: center;
        }

        h1 {
            font-family: -apple-system;
            font-size: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 align="center"><b>Danh sách mặt hàng</b></h1>
<br>
<div align="center">
    <table>
        <tr>
            <th>
                Nhập tên hàng:
                <form style="display: inline; width: 100px; height: 50px" class="form-inline my-2 my-lg-0" method="post">
                    <input name="key" class="form-control" type="search"
                           aria-label="Search">
                    <button style="background-color: black" class="btn btn-success" type="submit"><a href="find.php">Tìm kiếm</a></button>
                </form>
            </th>
            <th>
                <a class="btn btn-success" href="add.php">Thêm mặt hàng</a>
            </th>
        </tr>
    </table>
</div>
<br>
<table align="center" class="table" style="width: 1000px;border-radius: 15px">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th style="width: 300px" colspan="1" scope="col">Tùy chọn</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($listproduct as $key => $value): ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $value['productName'] ?></td>
            <td><?php echo $value['productType'] ?></td>
            <td style="text-align: center">
                <a style="width: 100px" class="btn btn-info" href="edit.php?id=<?php echo $value['productCode'] ?>">Chỉnh
                    sửa</a>
                <a style="width: 80px" class="btn btn-danger" onclick="return confirm('Bạn chắc chứ?')"
                   href="delete.php?id=<?php echo $value['productCode'] ?>">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
