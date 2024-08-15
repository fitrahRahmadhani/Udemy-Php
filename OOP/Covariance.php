<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

$catShelter = new Data\CatShelter();
$cat = $catShelter->adopt("Kitty");

$dogShelter = new Data\DogShelter();
$dog = $dogShelter->adopt("Rex");
