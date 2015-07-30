<?php

namespace DDD\Infrastructure;

use DDD\Model\AbstractRepository;
use DDD\Model\Manager as Manager2;
use DDD\Model\Manager;

class EmployeeRepository extends AbstractRepository {

    private $managers;
    private $engineers;

    function __construct($managers = null, $engineers = null) {
        $this->managers = $managers;
        $this->engineers = $engineers;
    }

    public function saveManager(Manager $manager) {
        $this->managers[$manager->getLastName()] = $manager;


        return $this;
    }

    public function updateManager(Manager $manager) {
        
    }


    public function findManagerByLastName($lastName){


        return $this->managers[$lastName];

    }

}
