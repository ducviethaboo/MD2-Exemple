<?php


class Product
{
    protected $productName;
    protected $productType;
    protected $buyPrice;
    protected $productCount;
    protected $productDate;
    protected $productDesc;

    public function __construct($name, $type, $price, $count, $date, $desc)
    {
        $this->productName = $name;
        $this->productType = $type;
        $this->buyPrice = $price;
        $this->productCount = $count;
        $this->productDate = $date;
        $this->productDesc = $desc;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @return mixed
     */
    public function getProductCount()
    {
        return $this->productCount;
    }

    /**
     * @return mixed
     */
    public function getProductDate()
    {
        return $this->productDate;
    }

    /**
     * @return mixed
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }


}