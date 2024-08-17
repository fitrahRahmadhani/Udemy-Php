<?php

function sayHello(string $first, string $middle = '', string $last)
{
  echo "Hello $first $middle $last" . PHP_EOL;
}

// without named argument
sayHello("foo", "bar", "baz");


// with named argument
sayHello(first: 'foo', last: 'baz');
