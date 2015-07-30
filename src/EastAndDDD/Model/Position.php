<?php

namespace EastAndDDD\Model;

class Position {

    private $position;
    private $annualIncome;

    function __construct($position, $annualIncome) {
        $this->position = $position;
        $this->annualIncome = $annualIncome;
    }

    function getPosition() {
        return $this->position;
    }

    function getAnnualIncome() {
        return $this->annualIncome;
    }

}
