<?php

namespace EastAndDDD\Model;

use EastAndDDD\Infrastructure\Projection;

class Position implements ProjectableInterface {

    private $position;
    private $annualIncome;

    function __construct($position, $annualIncome) {
        $this->position = $position;
        $this->annualIncome = $annualIncome;
    }

    public function project(Projection $projector) {


        $projector->projectScalar($this->position)
                ->projectScalar($this->annualIncome);
        return $this;
    }

}
