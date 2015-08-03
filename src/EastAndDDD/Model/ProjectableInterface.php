<?php

namespace EastAndDDD\Model;

use EastAndDDD\Infrastructure\Projection;

interface ProjectableInterface {

    public function project(Projection $projector);

}