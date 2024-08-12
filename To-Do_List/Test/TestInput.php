<?php

require_once "../Helper/Input.php";

$name = input("What's your name? ");
echo "Hello $name" . PHP_EOL;

$channel = input("Channel");
echo "$channel" . PHP_EOL;
