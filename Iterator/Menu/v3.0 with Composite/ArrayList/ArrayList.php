<?php

require_once __DIR__ . '/../Iterators/ArrayListIterator.php';

class ArrayList {

    public $array = [];

    public function add($value) {
        $this->array[] = $value;
    }

    public function get(int $i) {
        return $this->array[$i];
    }

    public function size(): int {
        return count($this->array);
    }

    public function remove($value) {
        if (!in_array($value, $this->array)) {
            throw new ErrorException(gettype($value) . " в массиве не найден");
        }
        $searchKey = array_search($value, $this->array);
        unset($this->array[$searchKey]);

        $this->newNumberingAfterRemove($searchKey);
    }

    private function newNumberingAfterRemove($searchKey) {
        if (!isset($this->array[$searchKey + 1])) {
            return;
        }
        for ($i = $searchKey; $i < $this->size(); $i++) {
            $this->array[$i] = $this->array[$i + 1];
        }
        unset($this->array[$this->size() - 1]);
        ksort($this->array);
    }

    public function iterator(): NewIterator {
        return new ArrayListIterator($this);
    }

}
