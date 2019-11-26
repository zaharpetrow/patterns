<?php

require_once __DIR__ . '/../interface/interfaceBeverage.php';

class Espresso implements Beverage {

    protected $price       = 160;
    protected $description = 'Эспрессо';

    public function cost() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description . '<br>';
    }

}
