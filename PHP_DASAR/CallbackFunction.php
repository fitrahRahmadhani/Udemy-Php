<?php


function sayHello(string $name, callable $filter)
{
  $finalName = call_user_func($filter, $name);
  echo "Hello $finalName" . PHP_EOL;
}

sayHello("Rizki", fn ($name) => strtoupper($name));
