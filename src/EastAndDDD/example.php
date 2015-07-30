<?php

use EastAndDDD\Infrastructure\EmployeeRepository;
use EastAndDDD\Model\EmployeeFactory;
use EastAndDDD\Model\Manager;

require_once __DIR__ . '/../../vendor/autoload.php';



$engineer1 = EmployeeFactory::hireEngineer('Pamela', 'Andersen', 'jklsdkj44', 'junior engineer', 34000);
$engineers = array($engineer1);
$manager = EmployeeFactory::hireManager('Peter', 'Smith', 'khsubvv', 'Product manager', 5784104872458);

$repository = new EmployeeRepository();
$manager = $repository->findManagerByFullName('Peter');

/* @var $manager Manager  */
$manager->wasAskedAPromotionBy('Pamela');





