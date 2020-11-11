<?php
include_once "DBConnect.php";
include_once "Product.php";

class ProductModel
{
    protected $database;
    protected $connect;

    public function __construct()
    {
        $this->connect = new DBConnect();
        $this->database = $this->connect->connect();
    }

    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE productCode = $id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function addProduct($product)
    {
        $sql = "INSERT INTO products (productName, productType, buyPrice, productCount, productDate, productDesc) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1,$product->getProductName());
        $stmt->bindParam(2,$product->getProductType());
        $stmt->bindParam(3,$product->getBuyPrice());
        $stmt->bindParam(4,$product->getProductCount());
        $stmt->bindParam(5,$product->getProductDate());
        $stmt->bindParam(6,$product->getProductDesc());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE productCode = $id";
        $stmt = $this->database->prepare($sql);
        $stmt->execute();
    }

    public function editProduct($id,$product)
    {
        $sql = "UPDATE products SET productName=:name, productType=:type, buyPrice=:price, productCount=:count, productDate=:date, productDesc=:desc WHERE productCode = $id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":name",$product->getProductName());
        $stmt->bindParam(":type",$product->getProductType());
        $stmt->bindParam(":price",$product->getBuyPrice());
        $stmt->bindParam(":count",$product->getProductCount());
        $stmt->bindParam(":date",$product->getProductDate());
        $stmt->bindParam(":desc",$product->getProductDesc());
        $stmt->execute();
    }

    public function findName($name)
    {
        $sql = "SELECT productName FROM products WHERE productName LIKE :key";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":key",$name);
        $stmt->execute();
        return $stmt->fetch();
    }



}