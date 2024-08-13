<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye, CanRun};

$person = new Person();
$person->goodBye("Sandhika");
