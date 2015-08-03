<?php

namespace EastAndDDD\Model;

interface ProjectableInterface {

    public function project(ProjectionInterface $projector);
}
