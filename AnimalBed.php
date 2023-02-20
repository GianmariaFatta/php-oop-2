<?php
include_once __DIR__ . '/models/Product.php';

class AnimalBed extends Product
{
    public $animal;
    public $size;

    public $color;

    public function __construct($_material, $_product_producer, $_name, $_animal, $_size, $_color)
    {
        parent::__construct($_material, $_product_producer, $_name);

        $this->animal = $_animal;
        $this->size = $_size;
        $this->color = $_color;
    }
}



?>