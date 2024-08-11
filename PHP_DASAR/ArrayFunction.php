<?php

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Array Map digunakan untuk memanipulasi data array menjadi array baru sesuai dengan funsgi yang dijalankan
var_dump(array_map(fn($value) => $value * 2, $data));

// rsort digunakan untuk mengurutkan array secara descending
rsort($data);
var_dump($data);

// array keys digunakan untuk mengambil index dari array
var_dump(array_keys($data));
