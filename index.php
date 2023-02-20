<?php
//     Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
// - L'e-commerce vende prodotti per animali.
// - I prodotti sono categorizzati, le categorie sono Cani o Gatti.
// - Tra i prodotti, troviamo cibo, giochi, cucce, etc.
// Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia ecc).

class Product
{
    public $material;
    public $product_producer;
    public $name;

    public function __construct($_material, $_product_producer, $_name)
    {
        $this->material = $_material;
        $this->product_producer = $_product_producer;
        $this->name = $_name;

    }



}



?>