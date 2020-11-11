<?php
include_once "../controller/ProductController.php";
$con = new ProductController();
$find = $con->search();
var_dump($find);
