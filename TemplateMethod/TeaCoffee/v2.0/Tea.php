<?php

require_once __DIR__ . '/interface/CoffeineBeverage.php';

class Tea extends CoffeineBeverage {

    public function brew() {
        echo 'Заваривание чая<br>';
    }

    public function addCondiments() {
        echo 'Добавление лемона<br>';
    }

}
