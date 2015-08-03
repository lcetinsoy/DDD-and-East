<?php

namespace EastAndDDD\Model;

class Manager extends Employee implements ManagerEngineerInterface {

    private $engineers;
    private $performanceCriteria;
    private $engineerPerformance;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position, $engineers) {

        parent::__construct($credentials, $identityInfo, $position);
        $this->engineers = $engineers;
    }

    public function engineerWasHired(Engineer $engineer, $lastName) {

        $this->engineers[$lastName] = $engineer;

        return $this;
    }

    public function establishedNewPerformanceCriteria(Performance $performance) {

        $this->performanceCriteria = $performance;

        return $this;
    }

    public function wasThankedBy(Engineer $engineer) {

        echo 'You are welcome';

        return $this;
    }

    public function wasAskedAPromotionBy($engineerName) {

        $engineer = $this->findEngineer($engineerName);
        /* @var $engineer Engineer */

        if (!$this->performanceCriteria) {

            $engineer->promotionWillBeStudied($this);
            return $this;
        }

        if ($this->wasEngineerEnoughPerformant($engineer)) {

            $engineer->promotionWasAcceptedBy($this, new Position('Senior engineer', 10));
        }
        else {


            $engineer->promotionWasRefusedBy($this);
        }
        return $this;
    }

    public function engineerPerformanceIs(Performance $performance) {

        $this->engineerPerformance = $performance;

        return $this;
    }

    private function wasEngineerEnoughPerformant(Engineer $engineer) {

        $engineer->wasRequestedPerformanceDataBy($this);
        return $this->engineerPerformance->isHigherThan($this->performanceCriteria);
    }

    private function findEngineer($engineerName) {

        return $this->engineers[$engineerName];
    }

}
