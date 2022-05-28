<?php

use PHP\Pdo\src\Domain\Model\Student;
use PHP\Pdo\src\Insfrastructure\Persistence\ConnectionCreator;
use PHP\Pdo\src\Insfrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição de turma

$connection->beginTransaction();
try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Sergio Lopes',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($anotherStudent);
    
    $connection->commit();
} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}



