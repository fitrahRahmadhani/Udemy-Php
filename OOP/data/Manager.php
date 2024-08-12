<?php
class Manager
{
  var string $name;
  var string $title;

  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void
  {
    echo "Hello $name, i am is manager" . PHP_EOL;
  }
}
