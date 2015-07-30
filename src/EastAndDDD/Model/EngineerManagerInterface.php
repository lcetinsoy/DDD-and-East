<?php

namespace EastAndDDD\Model;

interface EngineerManagerInterface {

    public function promotionWasAcceptedBy(Manager $manager);

    public function promotionWasRefusedBy(Manager $manager);

    public function promotionWillBeStudied(Manager $mangaer);
}
