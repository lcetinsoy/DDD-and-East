<?php

use EastAndDDD\Infrastructure\EmployeeRepository;
use EastAndDDD\Model\EmployeeFactory;
use EastAndDDD\Model\Manager;

require_once __DIR__ . '/../../vendor/autoload.php';

$engineer1 = EmployeeFactory::hireEngineer('Pamela', 'Andersen', 'jklsdkj44', 'junior engineer', 34000);
$engineers = array('Andersen' => $engineer1);
$manager = EmployeeFactory::hireManager('Peter', 'Smith', 'khsubvv', 'Product manager', 5784104872458, $engineers);

$repository = new EmployeeRepository();
$repository->wasAskedToSaveEmployeeBy(null, $engineer1);
$repository->wasAskedToSaveEmployeeBy(null, $manager);

/* @var $manager Manager  */
$manager = $repository->findManagerByLastName('Smith');
$manager->wasAskedAPromotionBy('Andersen');

$manager->establishedNewPerformanceCriteria(new EastAndDDD\Model\Performance(10));
$manager->wasAskedAPromotionBy('Andersen');



