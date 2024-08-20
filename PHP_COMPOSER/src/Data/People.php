<?php

namespace Fitrahrahmadhani\BelajarPhpComposer\Data;

class People
{

  public function __construct(private string $name) {}
  public function sayHello(): string
  {
    return "Hello $this->name";
  }
}
