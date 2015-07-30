<?php

namespace EastAndDDD\Model;

class Manager extends Employee implements ManagerEngineerInterface {

    private $engineers;
    private $performanceCriteria;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position, $engineers) {

        parent::__construct($credentials, $identityInfo, $position);
        $this->engineers = $engineers;
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
        $performance = $engineer->wasRequestedPerformanceDataBy($this);

        if (!$this->performanceCriteria) {
            $engineer->promotionWillBeStudied($this);
            return $this;
        }

        if ($this->wasEngineerEnoughPerformant($performance)) {

            $engineer->promotionWasAcceptedBy($this, new Promotion('Senior engineer', 10));
        }
        else {


            $engineer->promotionWasRefusedBy($this);
        }
        return $this;
    }

    private function wasEngineerEnoughPerformant(Performance $performance) {

        return $performance->isHigherThan($this->performanceCriteria);
    }

    private function findEngineer($engineerName) {

        return $this->engineers[$engineerName];
    }

}
