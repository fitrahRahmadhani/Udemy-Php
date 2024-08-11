<?php
$first = [
  "first_name" => "Fitrah",
];

$last = [
  "last_name" => "Rahmadhani",
];
$fullName = $first + $last;
var_dump($fullName);

// Membandingan kedua array
var_dump(($first + $last) == $fullName);
