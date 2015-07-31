<?php

namespace DDD\Model;

class Employee {

    private $credentials;
    private $identityInfo;
    private $position;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position) {
        $this->credentials = $credentials;
        $this->position = $position;
        $this->identityInfo = $identityInfo;
    }

    public function getLastName() {

        return $this->getIdentityInfo()->getLastName();
    }

    function getCredentials() {
        return $this->credentials;
    }

    function getIdentityInfo() {
        return $this->identityInfo;
    }

    function getPosition() {
        return $this->position;
    }

}
