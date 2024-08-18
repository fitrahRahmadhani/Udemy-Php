<?php

require_once __DIR__ . '/getConnection.php';

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

$customers = $statement->fetchAll();
var_dump($customers);
