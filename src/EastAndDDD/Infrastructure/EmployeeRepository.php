<?php

namespace EastAndDDD\Infrastructure;

use EastAndDDD\Model\AbstractRepository;
use EastAndDDD\Model\Employee;
use EastAndDDD\Model\EmployeeRepositoryInterface;
use EastAndDDD\Model\Engineer;
use EastAndDDD\Model\Manager;
use Exception;

class EmployeeRepository extends AbstractRepository implements EmployeeRepositoryInterface {

    private $employeeLastName;
    private $managers;
    private $engineers;

    function __construct($managers = null, $engineers = null) {
        $this->managers = $managers;
        $this->engineers = $engineers;
    }

    public function wasAskedToSaveEmployeeBy($controller, Employee $employee) {

        $employee->wasAskedLastNameBy($this);

        if (!$this->employeeLastName) {

            if ($controller) {
                $controller->cannotSaveEmploye('name is missing');

                return $this;
            }

            throw new Exception(' cannot save employee, name is missing');
        }

        if ($employee instanceof Manager) {
            $this->managers[$this->employeeLastName] = $employee;
        }

        if ($employee instanceof Engineer) {
                $this->engineers[$this->employeeLastName] = $employee;
        }

        if ($controller) {

            $controller->employeeWasSaved();
        }
        else {
            echo "employee was saved\n";
        }
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
