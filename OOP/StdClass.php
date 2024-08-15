<?php

$array = [
  "firstName" => "John",
  "lastName" => "Doe",
  "age" => 25
];

$object = (object) $array;
var_dump($object);
