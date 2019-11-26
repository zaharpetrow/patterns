<?php

require_once __DIR__ . '/interface/CoffeineBeverage.php';

class Coffee extends CoffeineBeverage {

    public function brew() {
        echo 'Заваривание кофе<br>';
    }

    public function addCondiments() {
        echo 'Добавление сахара и молока<br>';
    }

}
