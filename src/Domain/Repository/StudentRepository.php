<?php

namespace PHP\Pdo\src\Domain\Repository;

use PHP\Pdo\src\Domain\Model\Student;

interface StudentRepository
{
    public function allStudents(): array;
    public function studentsWithPhones(): array;
    public function stundetsBirthAt(\DateTimeInterface  $birthDate): array;
    public function save(Student $student): bool;
    public function remove(Student $student): bool;
}