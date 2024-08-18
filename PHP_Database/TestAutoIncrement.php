<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->exec("INSERT INTO comments (email, comment) VALUES ('lili@test.com', 'Comment 1')");
$id = $connection->lastInsertId();

echo $id;

$connection = null;
