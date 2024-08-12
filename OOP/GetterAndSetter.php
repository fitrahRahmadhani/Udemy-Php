<?php

require_once "data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name: {$category->getName()} | Expensive: {$category->isExpensive()}\n";
