<?php

namespace EastAndDDD\Model;

interface ProjectionInterface {

    public function projectScalar($value, $name);

    public function projectArray(array $projectables, $nest);

    public function project(ProjectableInterface $projectable, $nest);

}
