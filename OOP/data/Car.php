<?php

namespace Data;

interface HasBrand
{
  function getBrand(): string;
}

interface isMaintenance
{
  function maintenance(): bool;
}

interface Car extends HasBrand
{
  function drive(): void;

  function getTire(): int;
}

class Avanza implements Car, isMaintenance
{
  function drive(): void
  {
    echo "Drive Avanza" . PHP_EOL;
  }

  function getTire(): int
  {
    return 4;
  }

  function getBrand(): string
  {
    return "Toyota";
  }

  function maintenance(): bool
  {
    return false;
  }
}
