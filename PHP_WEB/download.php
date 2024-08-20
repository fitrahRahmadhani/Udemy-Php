<?php
if (isset($_GET['key']) && $_GET['key'] == 'rahasia') {
  header('Content-Disposition: attachment; filename="sample.jpg"');
  header('Content-Type: image/jpeg');
  readfile(__DIR__ . '/files/sample.jpg');
  exit();
} else {
  echo "Invaild Key";
}
