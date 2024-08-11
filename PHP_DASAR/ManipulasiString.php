<?php

// Menggabungkan string
$name = "Fitrah";
echo "Name: " . $name . PHP_EOL;

// Konversi tipe data
$valueString = (string) 10;
var_dump($valueString);

// Mengakses karakter pada string
echo $name[0] . PHP_EOL;

// Variabel Parsing
echo "Hello {$name}s, selamat belajar PHP $name" . PHP_EOL;
