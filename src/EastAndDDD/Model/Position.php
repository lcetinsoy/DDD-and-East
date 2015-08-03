<?php

namespace EastAndDDD\Model;

class Position implements ProjectableInterface {

    private $position;
    private $annualIncome;

    function __construct($position, $annualIncome) {
        $this->position = $position;
        $this->annualIncome = $annualIncome;
    }

    public function project(ProjectionInterface $projector) {

        $projector
                ->projectScalar($this->position, 'position')
                ->projectScalar($this->annualIncome, 'annualIncome')
        ;

        return $this;
    }

}
