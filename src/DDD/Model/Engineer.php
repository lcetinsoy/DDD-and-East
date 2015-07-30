<?php

namespace DDD\Model;

class Engineer extends Employee implements EngineerManagerInterface {

    private $billedHours;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position, $billingHour = 0) {
        parent::__construct($credentials, $identityInfo, $position);
        $this->billedHours = $billingHour;
    }

    public function billedHours($hourCount) {

        $this->billedHours += $hourCount;

        return $this;
    }

    public function getBilledHours() {

        return $this->billedHours;
    }

}
