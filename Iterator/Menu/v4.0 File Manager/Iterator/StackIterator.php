<?php

require_once __DIR__.'/interface/FileIterator.php';

class StackIterator implements FileIterator {

    public $stack;

    public function __construct(SplStack $stack) {
        $this->stack = $stack;
        $this->stack->rewind();
    }

    public function hasNext() {
        $this->stack->next();
        return $this->stack->valid();
    }

    public function next() {
        return $this->stack->current();
    }

}
