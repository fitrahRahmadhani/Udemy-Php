<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Sample, Dummy};
use function Helper\{helpMe};

$conflict = new Conflict1;
$sample = new Sample;
$dummy = new Dummy;

helpMe();
