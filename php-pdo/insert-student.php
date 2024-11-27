<?php

use Alura\Pdo\Domain\Model\Student;
use Vtiful\Kernel\Format;

require_once 'vendor/autoload.php';

$dbPath = __DIR__ . '/db.sqlite';
// dsn é usado para informar qual banco estamos usando
$pdo = new PDO('sqlite:' . $dbPath);

$student = new Student(
    null,
    readline("Insira seu nome:\n"),
    new DateTime(readline("Insira sua data de nascimento:\n"))
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?,?)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));
$statement->execute();
// echo $sqlInsert; exit();

if ($statement->execute()) {
    echo "Aluno incluido";
}
