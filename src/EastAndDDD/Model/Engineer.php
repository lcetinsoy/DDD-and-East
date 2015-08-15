<?php

namespace EastAndDDD\Model;


class Engineer extends Employee implements EngineerManagerInterface {

    private $billedHours;

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position, $billingHour = 0) {
        parent::__construct($credentials, $identityInfo, $position);
        $this->billedHours = $billingHour;
    }

    function promotionWasRefusedBy(Manager $manager) {

        echo "employee: I QUIT \n";

        return $this;
    }

    public function billedHours($hourCount) {

        $this->billedHours += $hourCount;

        return $this;
    }

    public function promotionWasAcceptedBy(Manager $manager, Position $newPosition) {

        $this->positionIs($newPosition);
        $manager->wasThankedBy($this);

        return $this;
    }

    public function promotionWillBeStudied(Manager $manager) {
        echo "employee: OK, I wait\n";

        return $this;
    }

    public function wasRequestedPerformanceDataBy(Manager $manager) {

        $manager->engineerPerformanceIs(new Performance($this, $this->billedHours));

        return $this;
    }

    public function project(ProjectionInterface $projector) {

        parent::project($projector);

        $projector->projectScalar($this->billedHours, 'billedHours');

        return $this;
    }

}
