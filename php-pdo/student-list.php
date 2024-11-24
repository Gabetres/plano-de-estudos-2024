<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$dbPath = __DIR__ . '/db.sqlite';
// dsn é usado para informar qual banco estamos usando
$pdo = new PDO('sqlite:' . $dbPath);


$statement = $pdo->query('SELECT * FROM students');

// retorna um array associativo 
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}

var_dump($studentList);
