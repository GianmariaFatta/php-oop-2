<?php


class Categories
{

    public $animals_one;




    public function __construct($_animal)
    {


        $this->animals_one = $_animal;


    }

}
//  BED
$dog = new categories('Dogs');
$cat = new categories('Cats');


?>