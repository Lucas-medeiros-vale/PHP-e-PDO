<?php

use PHP\Pdo\src\Domain\Model\Student;
use PHP\Pdo\src\Insfrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$student = new Student(
    null,
    "Wbeerlandia Martins",
    new DateTimeImmutable('1994-12-09'));

$sqlInsert = "INSERT INTO students ( name, birth_date) VALUES (:name, :birth_date);";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if($statement->execute()) {
    echo "Aluno Incluído";
}


