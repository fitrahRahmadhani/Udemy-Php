<?php

require_once __DIR__ . "/getConnection.php";

$connection = getConnection();

$sql = <<<SQL
INSERT INTO customers(id, name,email) VALUES (1, 'lili', 'lili@qq.com');
SQL;

$connection->exec($sql);

$connection = null;
