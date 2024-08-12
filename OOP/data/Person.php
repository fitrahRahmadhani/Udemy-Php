<?php

class Person
{
  const AUTHOR = "Fitrah Rahmadhani";

  var string $name;
  var ?string $address = null; // "?" bisa diset menjadi null
  var string $country = "Indonesia"; // default value 

  function __construct(string $name, ?string $address, string $country = "Indonesia")
  {
    $this->name = $name;
    $this->address = $address;
    $this->country = $country;
  }

  function sayHello(?string $name)
  {
    if (is_null($name)) {
      echo "Hi, my name is $this->name";
    } else {
      echo "Hello $name, my name is $this->name";
    }
  }

  // gunakan selft untuk mengakses constant (class saat ini)
  function info()
  {
    echo "Author : " . self::AUTHOR . PHP_EOL;
  }

  function __destruct()
  {
    echo "Person $this->name is destroyed" . PHP_EOL;
  }
}
