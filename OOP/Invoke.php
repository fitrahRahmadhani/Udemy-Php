<?php

require_once "data/MagicFunction.php";

$student = new Student();
$student->id = "1";
$student->name = "Jhone";
$student->age = 20;

$student(1, 2, 3, 4, 5);
