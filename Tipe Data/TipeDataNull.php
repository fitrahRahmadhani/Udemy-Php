<?php

$name = "Eko";
$name = null;

// Jika ingin membuat variabel yang tidak memiliki nilai terlebih dahulu, gunakan null
$age = null;
$age = 20;

// Mengecek apakah data null
$hobby = null;
var_dump(is_null($hobby));

// Menghapus variabel
$contoh = "Ini adalah contoh";
unset($contoh);
var_dump(isset($contoh));
