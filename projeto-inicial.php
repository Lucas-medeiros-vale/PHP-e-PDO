<?php

use PHP\Pdo\src\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Lucas Medeiros',
    new \DateTimeImmutable('1997-01-07')
);

echo $student->age();
