<?php

namespace EastAndDDD\Model;

class EmployeeFactory {

    public static function createEngineer($firstName, $lastName, $bankAccountNumber, $title, $annualSalary) {

        $credentials = new EmployeeCredentials($firstName . '.' . $lastName . '@myComp.eu', 'dkfjskldjf');
        $identityInfo = new IdentityInfo($firstName, $lastName, $bankAccountNumber);
        $position = new Position($title, $annualSalary);
        return new Engineer($credentials, $identityInfo, $position);
    }

    public static function createManager($firstName, $lastName, $bankAccountNumber, $title, $annualSalary, $engineers = array()) {

        $credentials = new EmployeeCredentials($firstName . '.' . $lastName . '@myComp.eu', 'dkfjskldjf');
        $identityInfo = new IdentityInfo($firstName, $lastName, $bankAccountNumber);
        $position = new Position($title, $annualSalary);
        return new Manager($credentials, $identityInfo, $position, $engineers);
    }

}
