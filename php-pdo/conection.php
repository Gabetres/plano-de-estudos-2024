<?php

$dbPath = __DIR__ . '/db.sqlite';
// dsn é usado para informar qual banco estamos usando
$pdo = new PDO('sqlite:' . $dbPath);

echo 'connected';

$pdo->exec(
    'CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);'
);
