<?php
include_once "../controller/ProductController.php";
$conn = new ProductController();
$deleteProduct = $conn->deleteProductController();
header("location:list.php");
