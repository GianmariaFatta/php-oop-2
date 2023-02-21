<?php

require_once __DIR__ . '/Categories.php';

class Product
{
    public $img;
    public $material;
    public $product_producer;
    public $name;
    public $categories;
    private $price;


    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($_price)
    {
        $this->price = $_price;
        return $this;
    }

    public function __construct($_img, $_material, $_product_producer, $_name, Categories $_categories, $_price)
    {
        $this->img = $_img;
        $this->material = $_material;
        $this->product_producer = $_product_producer;
        $this->name = $_name;
        $this->categories = $_categories;
        $this->price = $_price;

    }
}



?>