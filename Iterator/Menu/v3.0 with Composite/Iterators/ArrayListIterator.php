<?php

require_once __DIR__ . '/interface/NewIterator.php';

class ArrayListIterator implements NewIterator {

    public $array;
    public $position = 0;

    public function __construct(ArrayList $arrayList) {
        $this->array = $arrayList->array;
    }

    public function hasNext(): bool {
        return isset($this->array[$this->position]);
    }

    public function next() {
        return $this->array[$this->position++];
    }

}
