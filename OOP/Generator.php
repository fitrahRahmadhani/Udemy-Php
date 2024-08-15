<?php

function getGanjil(int $max): Iterator
{

  for ($i = 1; $i < $max; $i++) {
    if ($i % 2 == 1) {
      yield $i;
    }
  }
}

foreach (getGanjil(100) as $value) {
  echo "Ganjil: $value" . PHP_EOL;
}
