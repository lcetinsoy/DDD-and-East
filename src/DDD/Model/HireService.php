<?php

namespace DDD\Model;

use DDD\Model\EmployeeFactory;
use DDD\Infrastructure\EmployeeRepository;

class HireService {

    /** @var EmployeeRepository $employeeRepository */
    protected $employeRepository;

    function __construct(EmployeeRepository $employeRepository) {
        $this->employeRepository = $employeRepository;
    }

    public function managerWasHired($firstName, $lastName, $bankAccountNumber, $title, $annualSalary, $engineers = array()) {

        $manager = EmployeeFactory::createManager($firstName, $lastName, $bankAccountNumber, $title, $annualSalary);
        $this->employeRepository->saveManager($manager);

        return $manager;
    }

    public function engineerWasHiredBy(Manager $manager, $firstName, $lastName, $bankAccountNumber, $title, $annualSalary, $engineers = array()) {

        $engineer = EmployeeFactory::createEngineer($firstName, $lastName, $bankAccountNumber, $title, $annualSalary);
        $manager->engineerWasHired($engineer);
        $this->employeRepository->updateManager($manager);

        return $this;
                
    }

}
