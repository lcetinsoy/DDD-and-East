<?php

namespace EastAndDDD\Model;

interface EngineerManagerInterface {

    public function promotionWasAcceptedBy(Manager $manager, Position $newPosition);

    public function promotionWasRefusedBy(Manager $manager);

    public function promotionWillBeStudied(Manager $mangaer);

    public function wasRequestedPerformanceDataBy(Manager $manager);
}
