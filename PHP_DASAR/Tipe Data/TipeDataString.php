<?php

// Untuk membuat String di PHP, kita bisa menggunakan single quote
echo 'Name: ';
echo 'Fitrah Rahmadhani';
echo '\n';

// Untuk menggunakan escape sequence di PHP, kita bisa menggunakan double quote 
echo "Name: ";
echo "Fitrah\t Rahmadhani";

// Heredoc (memiliki kemampuan untuk parsing variabel), fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan enter, tab, dan lain-lain secara manual
echo <<<FITRAH
Ini adalah contoh string yang sangat
panjang dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga 

FITRAH;

// Nowdoc (memiliki kemampuan untuk parsing variabel)
echo <<<'FITRAH'
Ini adalah contoh string yang sangat
panjang dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga 
FITRAH;
