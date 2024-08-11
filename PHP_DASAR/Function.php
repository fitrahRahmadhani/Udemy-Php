<?php

function beriSalam($nama, $lastName = "Guest")
// gunakan default value di akhir argumen
{
  echo "Hello $nama $lastName" . PHP_EOL;
}

beriSalam("Daffa");
beriSalam("Fitrah", "Rahmadhani");

function sum(int $first, int $last): int
{
  return $first + $last;
}

echo sum(10, 10) . PHP_EOL;

// Varibel-length Argument List
function sumAll(...$values): string
{
  $total = 0;
  foreach ($values as $value) {
    $total += $value;
  }
  return "Total : " . implode(", ", $values) . " = $total" . PHP_EOL;
}
$values = [1, 2, 3, 4, 5];

echo sumAll(1, 2, 3, 4);
echo sumAll(...$values);

// Variabel Function
function sayHello($name, $filter)
{
  $final = $filter($name);
  echo "Hello $final" . PHP_EOL;
}
function toUpperCase(string $name): string
{
  return strtoupper($name);
}
// function reverseString(string $name): string
// {
//   return strrev($name);
// }

sayHello("Daffa", "toUpperCase");
// sayHello("Fitrah", "reverseString");
