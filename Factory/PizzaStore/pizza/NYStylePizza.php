<?php

require_once __DIR__ . '/Pizza.php';

class NYStyleCheesePizza extends Pizza {

    public function prepare() {
        echo 'Подготовка ' . __CLASS__ . '<br>';
    }

    public function bake() {
        echo 'Выпечка ' . __CLASS__ . '<br>';
    }

    public function cut() {
        echo 'Нарезка ' . __CLASS__ . '<br>';
    }

    public function box() {
        echo 'Коробка ' . __CLASS__ . '<br>';
    }

}

class NYStylePepperoniPizza extends Pizza {

    public function prepare() {
        echo 'Подготовка ' . __CLASS__ . '<br>';
    }

    public function bake() {
        echo 'Выпечка ' . __CLASS__ . '<br>';
    }

    public function cut() {
        echo 'Нарезка ' . __CLASS__ . '<br>';
    }

    public function box() {
        echo 'Коробка ' . __CLASS__ . '<br>';
    }

}

class NYStyleClamPizza extends Pizza {

    public function prepare() {
        echo 'Подготовка ' . __CLASS__ . '<br>';
    }

    public function bake() {
        echo 'Выпечка ' . __CLASS__ . '<br>';
    }

    public function cut() {
        echo 'Нарезка ' . __CLASS__ . '<br>';
    }

    public function box() {
        echo 'Коробка ' . __CLASS__ . '<br>';
    }

}

class NYStyleVeggiePizza extends Pizza {

    public function prepare() {
        echo 'Подготовка ' . __CLASS__ . '<br>';
    }

    public function bake() {
        echo 'Выпечка ' . __CLASS__ . '<br>';
    }

    public function cut() {
        echo 'Нарезка ' . __CLASS__ . '<br>';
    }

    public function box() {
        echo 'Коробка ' . __CLASS__ . '<br>';
    }

}
