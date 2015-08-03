<?php

namespace EastAndDDD\Infrastructure;

class ConsoleRenderer implements RenderInterface {

    public function render(array $data, $depth = 0) {
        foreach ($data as $key => $field) {

            if (is_array($field)) {

                $this->render($field, ++$depth);
            }
            else {
                echo str_repeat(' ', $depth) . $key . ': ' . $field . "\n";
            }
        }
        return $this;
    }

}
