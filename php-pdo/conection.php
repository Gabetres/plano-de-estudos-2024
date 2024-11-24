<?php

$dbPath = __DIR__ . '/db.sqlite';
$pdo = new PDO('sqlite:' . $dbPath);

echo 'connected';
