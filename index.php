<?php
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Bed.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toys.php';

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
    <div class="container m-5">
        <div class="row">
            <!-- ANIMAL TOYS -->
            <?php foreach ($animal_toys as $a_toy): ?>
                <div class="col-6">
                    <div class='card'>
                        <img src="https://citynews-udinetoday.stgy.ovh/~media/horizontal-mid/62114244262612/animali-domestici-2.jpg"
                            alt="">
                    </div>
                    <ul>
                        <li>
                            <?= $a_toy->name ?>
                        </li>
                        <li>
                            <?= $a_toy->product_producer ?>

                        </li>
                        <li>
                            <?= $a_toy->material ?>

                        </li>
                        <li>
                            <?= $a_toy->categories->animals_one ?>

                        </li>
                        <li>
                            <?= $a_toy->shape ?>

                        </li>
                        <li>
                            <?= $a_toy->color ?>
                        </li>
                        <li>
                            <?= $a_toy->feature ?>
                        </li>
                        <li>
                            <?= $a_toy->price ?>
                        </li>
                    </ul>
                </div>

            <?php endforeach; ?>
            <?php foreach ($animal_food as $a_food): ?>
                <div class="col-6">
                    <div class='card'>
                        <img src="https://citynews-udinetoday.stgy.ovh/~media/horizontal-mid/62114244262612/animali-domestici-2.jpg"
                            alt="">
                    </div>
                    <ul>
                        <li>
                            <?= $a_food->name ?>
                        </li>
                        <li>
                            <?= $a_food->product_producer ?>

                        </li>
                        <li>
                            <?= $a_food->material ?>

                        </li>
                        <li>
                            <?= $a_food->categories->animals_one ?>

                        </li>
                        <li>
                            <?= $a_food->ingredients ?>

                        </li>
                        <li>
                            <?= $a_food->consistency ?>
                        </li>
                        <li>
                            <?= $a_food->weight ?>
                        </li>
                        <li>
                            <?= $a_food->price ?>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
            <?php foreach ($animal_bed as $a_bed): ?>
                <div class="col-6">
                    <div class='card'>
                        <img src="https://citynews-udinetoday.stgy.ovh/~media/horizontal-mid/62114244262612/animali-domestici-2.jpg"
                            alt="">
                    </div>
                    <ul>
                        <li>
                            <?= $a_bed->name ?>
                        </li>
                        <li>
                            <?= $a_bed->product_producer ?>

                        </li>
                        <li>
                            <?= $a_bed->material ?>

                        </li>
                        <li>
                            <?= $a_bed->categories->animals_one ?>

                        </li>

                        <li>
                            <?= $a_bed->size ?>
                        </li>
                        <li>
                            <?= $a_bed->color ?>
                        </li>
                        <li>
                            <?= $a_bed->price ?>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>