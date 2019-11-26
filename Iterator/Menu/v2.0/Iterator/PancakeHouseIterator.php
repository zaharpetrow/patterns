<?php

require_once __DIR__ . '/interface/MyIterator.php';

class PancakeHouseIterator implements MyIterator {

    protected $menuItem;
    protected $numberOfItem = 0;

    public function __construct(ArrayList $menu) {
        $this->menuItem = $menu;
    }

    public function hasNext(): bool {
        return $this->numberOfItem >= $this->menuItem->size() ? FALSE : TRUE;
    }

    public function next() {
        return $this->menuItem->get($this->numberOfItem++);
    }

}
