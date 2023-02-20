<?php
class Product
{
    public $material;
    public $product_producer;
    public $name;

    public function __construct($_material, $_product_producer, $_name)
    {
        $this->material = $_material;
        $this->product_producer = $_product_producer;
        $this->name = $_name;

    }
}

?>