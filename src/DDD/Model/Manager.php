<?php

namespace DDD\Model;

class Manager extends Employee implements ManagerEngineerInterface {

    private $engineers;
    private $performanceCriteria;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position, array $engineers) {

        parent::__construct($credentials, $identityInfo, $position);
        $this->engineers = $engineers;
    }

    public function manageEngineer(Engineer $engineer) {

        $this->engineers[$engineer->getLastName()] = $engineer;
        return $this;
    }

    public function definePerformanceCriteria(Performance $performance) {

        $this->performanceCriteria = $performance;

        return $this;
    }

    public function promoteEngineer($engineerName) {

        $engineer = $this->findEngineer($engineerName);

        /* @var $engineer Engineer */
        $performance = new Performance($engineer->getBilledHours());

        if (!$this->performanceCriteria) {

            /** Not sure what to put here */
            return false;
        }

        if ($performance->givesSatisfaction($this->performanceCriteria)) {

            $engineer->promote(new Promotion('Senior engineer', 10));
        }

        return $this;
    }

    private function findEngineer($engineerName) {

        return $this->engineers[$engineerName];
    }

}
