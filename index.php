<?php
//     Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc).
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

?>