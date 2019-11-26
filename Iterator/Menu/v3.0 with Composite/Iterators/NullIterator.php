<?php

require_once __DIR__ . '/interface/NewIterator.php';

class NullIterator implements NewIterator {

    public function next() {
        return NULL;
    }

    public function hasNext(): bool {
        return FALSE;
    }

}
