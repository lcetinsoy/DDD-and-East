<?php

namespace DDD\Model;

class Performance {

    private $numberOfBillingHours;

    function __construct($numberOfBillingHours) {
        $this->numberOfBillingHours = $numberOfBillingHours;
    }

    function givesSatisfaction(self $performanceCriteria){

        return $this->numberOfBillingHours >= $performanceCriteria->numberOfBillingHours;
    }
}
