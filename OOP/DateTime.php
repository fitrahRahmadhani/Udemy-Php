<?php

$dateTime = new DateTime();
$dateTime->setTimezone(new DateTimeZone('Asia/Jakarta'));
$dateTime->setDate(2000, 1, 1);
$dateTime->setTime(10, 10, 0);

$dateTime->add(new DateInterval(('P1Y')));

var_dump($dateTime);

// Format Date
echo $dateTime->format('Y-m-d');

// Parse DateTime
$dateTime = DateTime::createFromFormat('Y-m-d', '2000-01-01 10:10:10', new DateTimeZone('Asia/Jakarta'));

var_dump($dateTime);
