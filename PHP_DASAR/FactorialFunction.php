<?php
function factorialLoop(int $value): int
{
  if ($value == 1) {
    return 1;
  } else {
    return $value * factorialLoop($value - 1);
  }
}

echo factorialLoop(5) . PHP_EOL;
