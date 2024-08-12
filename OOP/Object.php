<?php

require_once "data/Person.php";

$person = new Person("Budi", "Jakarta");

echo "Name: $person->name" . PHP_EOL;
echo "Address: $person->address" . PHP_EOL;
echo "Country: $person->country" . PHP_EOL;

$person->sayHello("Andi");
