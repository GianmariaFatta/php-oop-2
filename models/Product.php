<?php
class Product
{
    public $material;
    public $product_producer;
    public $name;
    public $animal;
    public $price;

    public function __construct($_material, $_product_producer, $_name, $_animal, $_price)
    {
        $this->material = $_material;
        $this->product_producer = $_product_producer;
        $this->name = $_name;
        $this->animal = $_animal;
        $this->price = $_price;

    }
}

?>