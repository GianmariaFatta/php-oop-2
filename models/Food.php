<?php
require_once __DIR__ . '/Product.php';

class AnimalFood extends Product
{
    public $ingredients;
    public $consistency;
    public $weight;



    public function __construct($_material, $_product_producer, $_name, $_categories, $_price, $_ingredients, $_consistency, $_weight)
    {
        parent::__construct($_material, $_product_producer, $_name, $_categories, $_price);


        $this->ingredients = $_ingredients;
        $this->consistency = $_consistency;
        $this->weight = $_weight;

    }
}


//  FOOD\
$muscle_dog = new AnimalFood('organic', 'Luigi for dog', 'Muscle Dog', $dog, 4, 'Cereals, which are basic carbohydrates like grain, rice bran, and beet pulp,Fats and oils, a source for vitamins, as well as the energy that dogs need to survive. ', 'humid', '500gr');
$agility_cat = new AnimalFood('organic', ' Lisa\'s Love', 'Agility Cat', $cat, 4, 'Meat
Grain Vegetables Meat and vegetable by-products Nutrient supplements Synthetic thickeners Flavour enhancers', 'humid', '500gr');

$animal_food = [$muscle_dog, $agility_cat];
?>