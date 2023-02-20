<?php

include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/AnimalBed.php';
include_once __DIR__ . '/models/AnimalFood.php';
include_once __DIR__ . '/models/AnimalToys.php';

//  BED
$classic_dog_bed = new AnimalBed('plastic', 'Sleep Dog', 'Classic for dog', 30, 'dog', 'medium', 'black');
$classic_cat_bed = new AnimalBed('plastic', 'Sleep Cat', 'Classic for cat', 25, 'cat', 'medium', 'white');

//  FOOD\
$muscle_dog = new AnimalFood('organic', 'Luigi for dog', 'Muscle Dog', 'Dog', 4, 'Cereals, which are basic carbohydrates like grain, rice bran, and beet pulp,Fats and oils, a source for vitamins, as well as the energy that dogs need to survive. ', 'humid', '500gr');
$agility_cat = new AnimalFood('organic', ' Lisa\'s Love', 'Agility Cat', 'Cat', 4, 'Meat
Grain Vegetables Meat and vegetable by-products Nutrient supplements Synthetic thickeners Flavour enhancers', 'humid', '500gr');

// TOYS
$dog_around = new AnimalToys('rubber', 'Dog Balls', 'Dog around', 12, 'dog', 'ball', 'multicolor', 'oval');
$funny_cat = new AnimalToys('wool', 'Wool 4 cat', 'Funny cat', 23, 'cat', 'ball', 'multicolor', 'clew');

$animal_toys = [$dog_around, $funny_cat];
$animal_food = [$muscle_dog, $agility_cat];
$animal_bed = [$classic_dog_bed, $classic_cat_bed];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP-2</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($animal_toys as $a_toy): ?>
                <div class="col-6">
                    <div class='card'></div>
                    <ul>
                        <li>
                            <?= $a_toy->name ?>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>