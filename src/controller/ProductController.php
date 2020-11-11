<?php
include_once "../model/ProductModel.php";
include_once "../model/Product.php";

class ProductController
{
    protected $controller;

    public function __construct()
    {
        $this->controller = new ProductModel();
    }

    public function showAll()
    {
        return $this->controller->getAllProduct();
    }

    public function addProductController()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productName = $_POST['name'];
            $productType = $_POST['type'];
            $buyPrice = $_POST['price'];
            $productCount = $_POST['count'];
            $date = getdate();
            $productDate = $date['mday'] . "/" . $date['mon'] . '/' . $date['year'];
            $productDesc = $_POST['note'];
            $product = new Product($productName, $productType, $buyPrice, $productCount, $productDate, $productDesc);
            $this->controller->addProduct($product);
            header("location:../view/list.php");
        }
    }

    public function deleteProductController()
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $this->controller->deleteProduct($id);
        }
    }

    public function showProductById()
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            return $this->controller->getProductById($id);
        }
    }

    public function editProductConntroler()
    {
        if($_SERVER['REQUEST_METHOD'] === "POST") {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $type = $_POST['type'];
            $price = $_POST['price'];
            $count = $_POST['count'];
            $getgate = getdate();
            $date = $getgate['mday'] . "/" . $getgate['mon'] . '/' . $getgate['year'];
            $desc = $_POST['note'];
            $product = new Product($name,$type,$price,$count,$date,$desc);
            $this->controller->editProduct($id,$product);
            header("location:../view/list.php");
        }
    }

    public function search()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $search = $_POST['key'];
            $name = '%' . $search . '%';
            return $this->controller->findName($name);
            include_once "../view/find.php";
        }
    }
}