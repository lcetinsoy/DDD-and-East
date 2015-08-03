<?php

namespace EastAndDDD\Model;

class EmployeeCredentials {

    private $email;
    private $password;

    function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

}
