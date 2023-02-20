<?php
require_once __DIR__ . '/Product.php';

class AnimalBed extends Product
{

    public $size;

    public $color;


    public function __construct($_material, $_product_producer, $_name, $_price, $_categories, $_size, $_color)
    {
        parent::__construct($_material, $_product_producer, $_name, $_categories, $_price);

        $this->size = $_size;
        $this->color = $_color;

    }

}
//  BED
$classic_dog_bed = new AnimalBed('plastic', 'Sleep Dog', 'Classic for dog', 30, $dog, 'medium', 'black');
$classic_cat_bed = new AnimalBed('plastic', 'Sleep Cat', 'Classic for cat', 25, $cat, 'medium', 'white');


$animal_bed = [$classic_dog_bed, $classic_cat_bed];
?>