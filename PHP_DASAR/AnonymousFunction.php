<?php

$sayHello = function ($name) {
  echo "Hello $name" . PHP_EOL;
};

$sayHello("Daffa");

function sayGoodbye($name, $filter): string
{
  $finalName = $filter($name);
  return "Goodbye $finalName" . PHP_EOL;
}

$filterFunction = function (string $name): string {
  return strtoupper($name);
};

sayGoodbye("Daffa", $filterFunction);

$firstName = "Fitrah";
$lastName = "Rahmadhani";

// gunakan use untuk memanggil variabel yang ada di luar function
$sayHelloBro = function () use ($firstName, $lastName) {
  echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloBro();
