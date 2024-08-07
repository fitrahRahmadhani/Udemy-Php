<?php

$values = array(10, 9, 8, 7.5, "Eko", "Joko");
var_dump($values);

$names = ["Fitrah", "Rahmadhani"];
var_dump($names);

// Ambil data pada index tertentu
var_dump($names[0]);

// Mengubah data pada index tertentu
$names[0] = "Joko";
var_dump($names);

// Menghapus data pada index tertentu
unset($names[0]);
var_dump($names);

// Menambahkan data
$names[] = "Ahmad";
var_dump($names);

// Map
$users = [
  "name" => "Fitrah",
  "age" => 20,
  "hobby" => "Coding",
  "address" => array(
    "city" => "Jakarta",
    "country" => "Indonesia"
  ),
];
var_dump($users);
