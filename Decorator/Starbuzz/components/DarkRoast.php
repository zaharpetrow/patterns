<?php

require_once __DIR__ . '/../interface/interfaceBeverage.php';

class DarkRoast implements Beverage {

    protected $price       = 125;
    protected $description = 'Сильная обжарка';

    public function cost() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description . '<br>';
    }

}
