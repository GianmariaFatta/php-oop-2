<?php
require_once __DIR__ . '/Product.php';

class AnimalToys extends Product
{

    public $shape;

    public $color;

    public $feature;




    public function __construct($_material, $_product_producer, $_name, $_price, $_animal, $_shape, $_color, $_feature)
    {
        parent::__construct($_material, $_product_producer, $_name, $_animal, $_price);

        $this->shape = $_shape;
        $this->color = $_color;
        $this->feature = $_feature;

    }

}



?>