<?php

namespace EastAndDDD\Infrastructure;

class ConsoleRenderer implements RenderInterface {

    public function render(array $data, $depth = 0) {
        foreach ($data as $key => $field) {

            if (is_array ($field)) {

                $this->render($field, ++$depth);
            }
            else {
                $sep = '';
                for ($i = 0; $i< $depth; $i++ ){
                    $sep .= ' ';
                }
                echo $sep . $key . ': ' . $field . "\n";
            }
        }
        return $this;
    }

}
