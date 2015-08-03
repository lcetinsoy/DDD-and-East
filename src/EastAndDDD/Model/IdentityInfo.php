<?php

namespace EastAndDDD\Model;

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

    function project(ProjectionInterface $projector) {

        $projector
                ->projectScalar($this->name, 'name')
                ->projectScalar($this->lastName, 'lastName');

        return $this;
    }

}
