<?php

namespace DDD\Model;

abstract class Employee {

    private $credentials;
    private $identityInfo;

    function __construct(UserCredentials $credentials, UserIndentityInfo $identityInfo) {
        $this->credentials = $credentials;
        $this->identityInfo = $identityInfo;
    }

    function getCredentials() {
        return $this->credentials;
    }

    function getIdentityInfo() {
        return $this->identityInfo;
    }

}
