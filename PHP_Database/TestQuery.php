<?php
require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$sql = 'SELECT id, name, email FROM customers';
$statement = $connection->query($sql);

foreach ($statement as $row) {
  echo $row['id'] . ' - ' . $row['name'] . ' - ' . $row['email'] . PHP_EOL;
}

$connection = null;
