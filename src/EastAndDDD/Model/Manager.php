<?php

namespace EastAndDDD\Model;

use EastAndDDD\Model\ProjectableInterface;

class Manager extends Employee implements ManagerEngineerInterface, ProjectableInterface {

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

    public function establishedNewPerformanceCriteriaFor($engineerName, $billingHourPerformance) {


        $engineer =  $this->engineers[$engineerName];
        if (!$engineer){
            throw new \Exception('Manager does not manager ' . $engineerName);
        }

        $this->performanceCriteria = new Performance($engineer, $billingHourPerformance);

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

        $this->wasEngineerEnoughPerformant($engineer);

        return $this;
    }

    public function wasSatisfiedByEngineerPerformance($engineer){

        $engineer->promotionWasAcceptedBy($this, new Position('Senior engineer', 42000));

        return $this;
    }

    public function wasNotSatisfiedByEngineerPerformance($engineer){

        $engineer->promotionWasRefusedBy($this);

        return $this;

    }

    public function engineerPerformanceIs(Performance $performance){
      $this->engineerPerformance = $performance;
    }

    private function wasEngineerEnoughPerformant(Engineer $engineer) {

        $engineer->wasRequestedPerformanceDataBy($this);

        $this->performanceCriteria->wasComparedBy($this, $this->performanceCriteria);

        return $this;

    }

    private function findEngineer($engineerName) {

        return $this->engineers[$engineerName];
    }



    public function project(ProjectionInterface $projector) {

        parent::project($projector);

        $projector->projectArray($this->engineers, 'engineers');

        return $this;
    }

}
