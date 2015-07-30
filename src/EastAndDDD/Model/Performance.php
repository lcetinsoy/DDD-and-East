<?php

namespace EastAndDDD\Model;

class Performance {

    private $numberOfBillingHours;

    function __construct($numberOfBillingHours) {
        $this->numberOfBillingHours = $numberOfBillingHours;
    }


    function isHigherThan(self $performanceCriteria){

        return $this->numberOfBillingHours >= $performanceCriteria->numberOfBillingHours;
    }
}
