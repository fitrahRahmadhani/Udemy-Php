<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fitrahrahmadhani\BelajarPhpComposer\Data\People;

$people = new People('Fitrah');

echo $people->sayHello();
