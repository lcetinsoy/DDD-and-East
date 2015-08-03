<?php

namespace EastAndDDD\Infrastructure;

use EastAndDDD\Model\ProjectableInterface;

class Projection {

    protected $projections;

    public function __construct() {

        $this->projections = array();
    }

    public function render(RenderInterface $interface) {

        $interface->render($this->projections);

        return $this;
    }

    public function projectScalar($data, $key = null) {

        $this->projections[$key] = $data;

        return $this;
    }

    public function projectArray(array $projectables, $nest) {

        $i = 0;
        foreach ($projectables as $projectable) {

            if (!$projectable instanceof ProjectableInterface) {
                throw new Exception('Array element must implement ProjectableInterface');
            }
            $this->nest($projectable, $i);
            $i++;
        }
    }

    public function project(ProjectableInterface $projectable, $nest = '') {

        if ('' != $nest) {

            $this->nest($projectable, $nest);
        }
        else {
            $projectable->project($this);
        }

        return $this;
    }

    private function nest(ProjectableInterface $projectable, $key) {

        $projection = new Projection();

        $projectable->project($projection);
        $this->projections[$key] = $projection->projections;

        return $this;
    }

}
