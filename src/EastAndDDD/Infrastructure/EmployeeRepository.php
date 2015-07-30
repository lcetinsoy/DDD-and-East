<?php

namespace EastAndDDD\Infrastructure;

use EastAndDDD\Model\Employee;
use EastAndDDD\Model\EmployeeRepositoryInterface;
use EastAndDDD\Model\Engineer;
use EastAndDDD\Model\Manager;
use Exception;

class EmployeeRepository implements EmployeeRepositoryInterface {

    private $employeeLastName;
    private $managers;
    private $engineers;

    function __construct($managers = null, $engineers = null) {
        $this->managers = $managers;
        $this->engineers = $engineers;
    }

    public function wasAskedToSaveEmployeeBy($controller, Employee $employee) {

        $employee->wasAskedNameBy($this);

        if (!$this->employeeLastName) {

            if ($controller) {
                $controller->cannotSaveEmploye('name is missing');

                return $this;
            }

            throw new Exception(' cannot save employee, name is missing');
        }

        if ($employee instanceof Manager) {
            $this->managers[] = $employee;
        }

        if ($employee instanceof Engineer) {
            $this->engineers[$employee->wasAskedNameBy($this)] = $employee;
        }

        if ($controller) {

            $controller->employeeWasSaved();
        }
        else{
            echo "employee was saved";
        }
        return $this;
    }

    public function findManagerByFullName($managerName) {

        return $this->managers[$managerName];
    }

    /** This is A setter ! :( */
    public function employeeLastNameIs($lastName) {

        $this->employeeLastName = $lastName;

        return $this;
    }

}
