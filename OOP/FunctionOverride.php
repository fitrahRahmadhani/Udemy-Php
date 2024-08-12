<?php

require_once "data/Manager.php";
require_once "data/VicePresident.php";

$manager = new Manager();
$manager->name = "Rizki";
$manager->sayHello("Dimas");

$vp = new VicePresident();
$vp->name = "Dimas";
$vp->sayHello("Rizki");
