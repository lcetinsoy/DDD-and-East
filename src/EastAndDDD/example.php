<?php

use EastAndDDD\Infrastructure\EmployeeRepository;
use EastAndDDD\Model\HireService;
use EastAndDDD\Model\Manager;
use EastAndDDD\Model\Performance;

require_once __DIR__ . '/../../vendor/autoload.php';

$employeeRepository = new EmployeeRepository();
$hireService = new HireService($employeeRepository);

$manager = $hireService->managerWasHired('Peter', 'Smith', 'khsubvv', 'Product manager', 578410487245);

$hireService->engineerWasHiredBy($manager, 'Pamela', 'Andersen', 'jklsdkj44', 'junior engineer', 34000);



/* @var $manager Manager  */
$manager = $employeeRepository->findManagerByLastName('Smith');

$manager->wasAskedAPromotionBy('Andersen');

$manager->establishedNewPerformanceCriteria(new Performance(10));
$manager->wasAskedAPromotionBy('Andersen');

