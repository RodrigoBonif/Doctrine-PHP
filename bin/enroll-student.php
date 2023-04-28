<?php

use Alura\Doctrine\Helper\EntityManagerCreator;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Entity\Course;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentId = $argv[1];
$courseId = $argv[2];

$student = $entityManager->find(Student::class, $studentId);
$course = $entityManager->find(Course::class, $courseId);

$student->enrollInCourse($course);
$entityManager->flush();