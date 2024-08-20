<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('CobaLogger');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/log.txt', Logger::INFO));

$log->info('Hello, Monolog!');
$log->info('Selamat Belajar Composer');
