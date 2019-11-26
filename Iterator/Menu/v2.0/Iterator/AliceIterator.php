<?php

require_once __DIR__ . '/interface/MyIterator.php';

class AliceIterator implements MyIterator {

    protected $position = 0;
    protected $menuItem = [];

    public function isEmpty(): bool {
        return empty($this->menuItem);
    }

    public function addItem(MyIterator $item) {
        $this->menuItem[] = $item;
    }

    public function hasNext(): bool {
        return $this->position >= count($this->menuItem) ? FALSE : TRUE;
    }

    public function next() {
        return $this->menuItem[$this->position++];
    }

}
