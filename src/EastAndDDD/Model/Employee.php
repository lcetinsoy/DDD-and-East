<?php

namespace EastAndDDD\Model;

class Employee {

    private $credentials;
    private $identityInfo;
    private $position;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position) {
        $this->credentials = $credentials;
        $this->position = $position;
        $this->identityInfo = $identityInfo;
    }

    function wasAskedLastNameBy(AbstractRepository $repository) {

        $repository->employeeLastNameIs($this->identityInfo->getLastName());

        return $this;
    }

    public function positionIs(Position $position) {

        $this->position = $position;

        return $this;
    }

}
