<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('ancaw@test.com', 'hi)");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ancaw@test.com', 'hi)");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ancaw@test.com', 'hi)");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ancaw@test.com', 'hi)");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('ancaw@test.com', 'hi)");

$connection->commit();

$connection = null;
