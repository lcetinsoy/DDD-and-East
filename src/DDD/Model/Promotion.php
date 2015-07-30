<?php

namespace DDD\Model;

class Promotion {

    private $newPosition;
    private $payIncreaseRate;

    function __construct($newPosition, $payIncreaseRate) {
        $this->newPosition = $newPosition;
        $this->payIncreaseRate = $payIncreaseRate;
    }

    function getNewPosition() {
        return $this->newPosition;
    }

    function getPayIncreaseRate() {
        return $this->payIncreaseRate;
    }

}
