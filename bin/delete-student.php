<?php
    
    use \Alura\Doctrine\Helper\EntityManagerCreator;
    use \Alura\Doctrine\Entity\Student;

    require_once __DIR__ . '/../vendor/autoload.php';
    $entityManager = EntityManagerCreator::createEntityManager();

    $student = $entityManager->find(Student::class, $argv[1]);

    $entityManager->remove($student);
    $entityManager->flush();
