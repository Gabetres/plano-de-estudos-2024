<?php

use Alura\Pdo\Domain\Model\Student;
use Vtiful\Kernel\Format;

require_once 'vendor/autoload.php';

$dbPath = __DIR__ . '/db.sqlite';
// dsn é usado para informar qual banco estamos usando
$pdo = new PDO('sqlite:' . $dbPath);

$student = new Student(
    null,
    'Gabriel',
    new DateTime('2004-09-03')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

var_dump($pdo->exec($sqlInsert));
