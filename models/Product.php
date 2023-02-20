<?php

require_once __DIR__ . '/Categories.php';

class Product
{
    public $material;
    public $product_producer;
    public $name;
    public $categories;
    public $price;

    public function __construct($_material, $_product_producer, $_name, Categories $_categories, $_price)
    {
        $this->material = $_material;
        $this->product_producer = $_product_producer;
        $this->name = $_name;
        $this->categories = $_categories;
        $this->price = $_price;

    }
}


?>