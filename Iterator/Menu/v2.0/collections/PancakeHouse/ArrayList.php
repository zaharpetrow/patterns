<?php

class ArrayList {

    public $arrayList = [];

    public function add($object) {
        if (!is_object($object)) {
            throw new Exception("В метод add() должен быть передан объект");
        }
        $this->arrayList[] = $object;
    }

    public function size(): int {
        return count($this->arrayList);
    }

    public function get(int $i) {
        return $this->arrayList[$i];
    }

}
