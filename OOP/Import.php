<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

// sudah didefinisikan di atas, maka tidak perlu menuliskan namespace
$conflict1 = new Conflict();

// belum didefinisikan di atas, maka perlu menuliskan namespace
$confilct2 = new Data\Two\Conflict();

helpMe();
echo APPLICATION;
