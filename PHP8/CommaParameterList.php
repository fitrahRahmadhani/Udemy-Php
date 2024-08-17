<?php

function sayHello(string $first, string $last)
{
  echo "Hello $first $last" . PHP_EOL;
}

sayHello(
  "John",
  "Doe",
);
