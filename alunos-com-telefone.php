<?php

use PHP\Pdo\src\Insfrastructure\Persistence\ConnectionCreator;
use PHP\Pdo\src\Insfrastructure\Repository\PdoStudentRepository;

require_once './vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \PHP\Pdo\src\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();



echo $studentList[1]->phones()[0]->formattedPhones();
var_dump($studentList);

