<?php

class Zero
{
  private array $properties = [];

  public function __get($name)
  {
    return $this->properties[$name];
  }

  public function __set($name, $value)
  {
    return $this->properties[$name] = $value;
  }

  public function __isset($name): bool
  {
    return isset($this->properties[$name]);
  }

  public function __unset($name)
  {
    unset($this->properties[$name]);
  }

  public function __call($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call function $name with arguments $join" . PHP_EOL;
  }

  public static function __callStatic($name, $arguments)
  {
    $join = join(",", $arguments);
    echo "Call static function $name with arguments $join" . PHP_EOL;
  }
}

$zero = new Zero();
$zero->firstName = 'John';
$zero->lastName = 'Doe';

echo "First Name: {$zero->firstName}" . PHP_EOL;
echo "Last Name: {$zero->lastName}" . PHP_EOL;


$zero->sayHello('John', 'Doe');
$zero::sayHello('John', 'Doe');
