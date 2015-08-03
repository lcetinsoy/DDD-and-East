<?php

namespace EastAndDDD\Model;

use EastAndDDD\Infrastructure\Projection;

class IdentityInfo implements ProjectableInterface {

    private $name;
    private $lastName;
    private $bankAccountNumber;

    function __construct($name, $lastName, $bankAccountNumber) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->bankAccountNumber = $bankAccountNumber;
    }

    function getLastName() {
        return $this->lastName;
    }

    function project(Projection $projector) {

        $projector
                ->projectScalar($this->name, 'name')
                ->projectScalar($this->lastName, 'lastName');

        return $this;
    }

}
