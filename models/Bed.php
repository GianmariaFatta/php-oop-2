<?php
require_once __DIR__ . '/Product.php';

class AnimalBed extends Product
{

    public $size;

    public $color;


    public function __construct($_material, $_product_producer, $_name, $_price, $_animal, $_size, $_color)
    {
        parent::__construct($_material, $_product_producer, $_name, $_animal, $_price);

        $this->size = $_size;
        $this->color = $_color;

    }

}

?>