<?php

namespace DDD\Model;

class IdentityInfo {

    private $name;
    private $lastName;
    private $bankAccountNumber;

    function __construct($name, $lastName, $bankAccountNumber) {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->bankAccountNumber = $bankAccountNumber;
    }

    public function equalsTo(self $identity) {

        return $this->bankAccountNumber == $identity->bankAccountNumber;
    }

    function getName() {
        return $this->name;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getBankAccountNumber() {
        return $this->bankAccountNumber;
    }

}
