<?php

namespace EastAndDDD\Model;

class Performance {

    private $numberOfBillingHours;

    private $employee;

    function __construct(Employee $employee, $numberOfBillingHours) {
        $this->numberOfBillingHours = $numberOfBillingHours;

        $this->employee = $employee;
    }

    function wasComparedBy(Manager $manager, self $performanceCriteria){

        if ($this->numberOfBillingHours >= $performanceCriteria->numberOfBillingHours){

          $manager->wasSatisfiedByEngineerPerformance($this->employee);
        }

        else{

          $manager->wasNotSatisfiedByEngineerPerformance($this->employee);
        }

        return $this;

    }
}
