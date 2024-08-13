<?php

namespace Data\Traits;

trait SayGoodBye
{
  function goodBye(?string $name): void
  {
    if (is_null($name)) {
      echo "Good bye" . PHP_EOL;
    } else {
      echo "Good bye $name" . PHP_EOL;
    }
  }
}
trait SayHello
{
  function hello(?string $name): void
  {
    if (is_null($name)) {
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
    }
  }
}

trait HasName
{
  public string $name;
}

trait CanRun
{
  public abstract function run(): void;
}
trait All
{
  use SayHello, SayGoodBye, HasName, CanRun {
    hello as private; //visibility override
  }
}

class Person
{
  use All;
  public function run(): void
  {
    echo "Person $this->name is running" . PHP_EOL;
  }


  // Override trait
  public function goodBye(?string $name): void
  {
    echo "Good bye $name in person" . PHP_EOL;
  }
}
