<?php

namespace EastAndDDD\Model;

use EastAndDDD\Infrastructure\EmployeeRepository;

class HireService {

    /** @var EmployeeRepository $employeeRepository */
    protected $employeRepository;

    function __construct(EmployeeRepository $employeRepository) {
        $this->employeRepository = $employeRepository;
    }

    public function managerWasHired($firstName, $lastName, $bankAccountNumber, $title, $annualSalary, $engineers = array()) {

        $manager = EmployeeFactory::createManager($firstName, $lastName, $bankAccountNumber, $title, $annualSalary);
        $this->employeRepository->wasAskedToSaveManagerBy($this, $manager);

        return $manager;
    }

    public function engineerWasHiredBy(Manager $manager, $firstName, $lastName, $bankAccountNumber, $title, $annualSalary, $engineers = array()) {

        $engineer = EmployeeFactory::createEngineer($firstName, $lastName, $bankAccountNumber, $title, $annualSalary);
        $manager->engineerWasHired($engineer, $lastName);
        $this->employeRepository->saveHiredEngineer($engineer);

        return $this;
    }

    public function cannotSaveEmployee($reason) {

        echo $reason;

        return $this;
    }

    public function managerWasSaved() {

        echo "Manager saved\n";

        return $this;
    }

}
