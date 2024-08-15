<?php

require_once "data/MagicFunction.php";

$student = new Student();
$student->id = "1";
$student->name = "Jhone";
$student->age = 20;

// bisa seperti ini
// $strudent = (string) $student;
// echo $strudent;

// atau seperti ini
echo $student;
