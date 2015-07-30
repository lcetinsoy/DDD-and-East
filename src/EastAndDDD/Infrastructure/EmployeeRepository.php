<?php

namespace EastAndDDD\Infrastructure;

use EastAndDDD\Model\AbstractRepository;
use EastAndDDD\Model\Employee;
use EastAndDDD\Model\EmployeeRepositoryInterface;
use EastAndDDD\Model\Engineer;
use EastAndDDD\Model\HireService;
use EastAndDDD\Model\Manager;

class EmployeeRepository extends AbstractRepository implements EmployeeRepositoryInterface {

    private $employeeLastName;
    private $managers;
    private $engineers;

    function __construct($managers = null, $engineers = null) {
        $this->managers = $managers;
        $this->engineers = $engineers;
    }

    public function wasAskedToSaveManagerBy(HireService $service, Employee $employee) {

        $employee->wasAskedLastNameBy($this);

        if (!$this->employeeLastName) {

            $service->cannotSaveEmploye('name is missing');

            return $this;
        }


        if ($employee instanceof Manager) {
            $this->managers[$this->employeeLastName] = $employee;
        }

        if ($employee instanceof Engineer) {
            $this->engineers[$this->employeeLastName] = $employee;
        }

        $service->managerWasSaved();
        return $this;
    }

    public function engineerWasHired($engineer) {

        $this->engineers[] = $engineer;

        return $this;
    }

    public function findManagerByLastName($managerLastName) {

        return $this->managers[$managerLastName];
    }

    /** This is A setter ! :( */
    public function employeeLastNameIs($lastName) {

        $this->employeeLastName = $lastName;

        return $this;
    }

}
