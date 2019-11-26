<?php

require_once __DIR__ . '/interface/MyIterator.php';

class DinerIterator implements MyIterator {

    protected $menuItem;
    protected $numberOfItem = 0;

    public function __construct(array $menu) {
        $this->menuItem = $menu;
    }

    public function hasNext(): bool {
        return $this->numberOfItem >= count($this->menuItem) ? FALSE : TRUE;
    }

    public function next() {
        return $this->menuItem[$this->numberOfItem++];
    }

}
