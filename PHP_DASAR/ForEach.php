<?php
$names = ["Apel", "Mangga", "Jeruk"];

foreach ($names as $name) {
  echo "Buah $name" . PHP_EOL;
}

// Jika array berbentuk map (pasangan key value)
$person = [
  "first" => "Fitrah",
  "last" => "Rahmadhani",
];

foreach ($person as $key => $value) {
  echo "$value" . PHP_EOL;
}

foreach ($person as $key => $value) {
  echo "$key: $value" . PHP_EOL;
}
