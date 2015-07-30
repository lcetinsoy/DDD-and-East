<?php

use DDD\Infrastructure\EmployeeRepository;
use DDD\Model\HireService;
use DDD\Model\Manager;
use DDD\Model\Performance;

require_once __DIR__ . '/../../vendor/autoload.php';

$repository = new EmployeeRepository();
$hireService = new HireService($repository);
$manager = $hireService->managerWasHired('Peter', 'Smith', 'khsubvv', 'Product manager', 578410487245);
$hireService->engineerWasHiredBy($manager, 'Pamela', 'Andersen', 'jklsdkj44', 'junior engineer', 34000);


/* @var $manager Manager  */
$manager = $repository->findManagerByLastName('Smith');
if ($manager->promoteEngineer('Andersen')) {
    echo "engineer was promoted\n";
}
else {
    echo "engineer was not promoted\n";
}

$manager->definePerformanceCriteria(new Performance(10));
$manager->promoteEngineer('Andersen');

if ($manager->promoteEngineer('Andersen')) {
    echo "engineer was promoted\n";
}
else {
    echo "engineer was not promoted\n";
}

