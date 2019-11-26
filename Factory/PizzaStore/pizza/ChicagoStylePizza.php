<?php

require_once __DIR__ . '/Pizza.php';

class ChicagoStyleCheesePizza extends Pizza {

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

class ChicagoStylePepperoniPizza extends Pizza {

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

class ChicagoStyleClamPizza extends Pizza {

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

class ChicagoStyleVeggiePizza extends Pizza {

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
