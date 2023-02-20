<?php
require_once __DIR__ . '/Product.php';

class AnimalFood extends Product
{
    public $ingredients;
    public $consistency;
    public $weight;



    public function __construct($_material, $_product_producer, $_name, $_animal, $_price, $_ingredients, $_consistency, $_weight)
    {
        parent::__construct($_material, $_product_producer, $_name, $_animal, $_price);


        $this->ingredients = $_ingredients;
        $this->consistency = $_consistency;
        $this->weight = $_weight;

    }
}
?>