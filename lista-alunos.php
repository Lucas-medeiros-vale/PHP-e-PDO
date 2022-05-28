<?php

use PHP\Pdo\src\Insfrastructure\Persistence\ConnectionCreator;
use PHP\Pdo\src\Insfrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

var_dump($studentList);