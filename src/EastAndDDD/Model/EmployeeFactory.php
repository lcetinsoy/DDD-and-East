<?php

namespace EastAndDDD\Model;

class EmployeeFactory {

    public static function hireManager($firstName, $lastName, $bankAccoundNumber, $title, $annualSalary, $engineers = array()) {

        $credentials = new EmployeeCredentials($firstName . '.' . $lastName . '@myComp.eu', 'dkfjskldjf');
        $identityInfo = new IdentityInfo($firstName, $lastName, $bankAccountNumber);
        $position = new Position($title, $annualSalary);
        return new Manager($credentials, $identityInfo, $position, $engineers);
    }

    public static function hireEngineer($firstName, $lastName, $bankAccoundNumber, $title, $annualSalary) {

        $credentials = new EmployeeCredentials($firstName . '.' . $lastName . '@myComp.eu', 'dkfjskldjf');
        $identityInfo = new IdentityInfo($firstName, $lastName, $bankAccountNumber);
        $position = new Position($title, $annualSalary);
        return new Engineer($credentials, $identityInfo, $position);
    }

}
