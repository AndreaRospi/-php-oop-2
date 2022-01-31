<?php
require __DIR__ .  "/classes/Product.php";
require __DIR__ .  "/classes/User.php";
require __DIR__ .  "/classes/Premium.php";

// utenti
$andrea= new User("andrea", "Rospi", "andrea.rospi@gamil.com", "5342128965437898");
var_dump($andrea);

$massimiliano = new Premium("Massimiliano", "De Vita", "massimilaino.devita@gmail.com", "4023489764567213");
var_dump($massimiliano);

// prodotti
$pc = new Product("Macbook Pro M1 Pro", "Chip Apple M1 Pro, Display Retina LED da 14 pollici, 16GB di memoria ram unificata, Unità SSD da 512GB, MacOs Monterey", 2.349,00);
var_dump($pc);

$smartphone = new Product("Iphone 13", "A15 Bionic,256 GB storage, Display 6,1 pollici Oled", 939);
var_dump($smartphone);