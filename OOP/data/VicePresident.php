<?php

require_once "data/Manager.php";

class VicePresident extends Manager
{
  // Construct override
  public function __construct(string $name = "")
  {
    // tidak wajib tapi direkomendasikan memanggil parent constructor
    parent::__construct($name, "VP");
  }

  // function override
  function sayHello(string $name): void
  {
    echo "Hello $name, i am is VP" . PHP_EOL;
  }
}
