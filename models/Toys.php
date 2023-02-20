<?php
require_once __DIR__ . '/Product.php';

class AnimalToys extends Product
{

    public $shape;

    public $color;

    public $feature;




    public function __construct($_material, $_product_producer, $_name, $_price, $_categories, $_shape, $_color, $_feature)
    {
        parent::__construct($_material, $_product_producer, $_name, $_categories, $_price);

        $this->shape = $_shape;
        $this->color = $_color;
        $this->feature = $_feature;

    }

}

// TOYS
$dog_around = new AnimalToys('rubber', 'Dog Balls', 'Dog around', 12, $dog, 'ball', 'multicolor', 'oval');
$funny_cat = new AnimalToys('wool', 'Wool 4 cat', 'Funny cat', 23, $cat, 'ball', 'multicolor', 'clew');

$animal_toys = [$dog_around, $funny_cat];
?>