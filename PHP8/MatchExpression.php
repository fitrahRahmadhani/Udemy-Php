<?php

$value = "A";

// Equls Check
$result = match ($value) {
  "A", "B", "C" => "Anda lulus",
  "D" => "Anda tidak lulus",
  "E" => "Sepertinya Anda salah jurusan",
  default => "Nilai apa itu?"
};
echo $result . PHP_EOL;

// NON Equals Check

$value1 = 80;
$result = match (true) {
  $value1 > 90 => "A",
  $value1 > 80 => "B",
  $value1 > 70 => "C",
  $value1 > 60 => "D",
  $value1 > 50 => "E",
  default => "F"
};

echo $result;


// Match Expression dengan kondisi
$name = "Mr. Eko";

$result = match (true) {
  str_contains($name, "Mr.") => "Hello Sir",
  str_contains($name, "Mrs.") => "Hello Mam",
  default => "Hello"
};
echo $result . PHP_EOL;
