<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
  echo "Selamat Anda Lulus" . PHP_EOL;
} else if ($nilai >= 65 && $absen >= 65) {
  echo "Selamat Anda Remidi" . PHP_EOL;
} else {
  echo "Maaf Anda Tidak Lulus" . PHP_EOL;
}
