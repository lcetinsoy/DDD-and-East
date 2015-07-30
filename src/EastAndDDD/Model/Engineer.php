<?php

namespace EastAndDDD\Model;

class Engineer extends Employee implements EngineerManagerInterface {

    function __construct(EmployeeCredentials $credentials, IdentityInfo $identityInfo, Position $position) {
        parent::__construct($credentials, $identityInfo);
        $this->position = $position;
        $this->annualPay = $annualPay;
    }

    function promotionWasRefusedBy() {

        $this->quit('I QUIT');

        return $this;
    }

    public function promotionWasAcceptedBy(Manager $manager, $newPromotion) {

        $this->position = $newPromotion->getNewPosition();

        $this->annualPay *= 1 + $newPromotion->getPayIncreaseRate();

        $manager->wasThankedBy(this);

        return $this;
    }

    public function promotionWillBeStudied($manager) {
        echo "OK, I wait";
    }

}
