<?php

namespace EastAndDDD\Model;

abstract class Employee {

    private $credentials;
    private $identityInfo;
    private $position;

    function __construct(UserCredentials $credentials, UserIndentityInfo $identityInfo, Position $position) {
        $this->credentials = $credentials;
        $this->position = $position;
        $this->identityInfo = $identityInfo;
    }

    function wasAskedLastNameBy(Repository $repository) {

        $repository->employeeLastNameIs($this->identityInfo->getLastName);
    }

}
