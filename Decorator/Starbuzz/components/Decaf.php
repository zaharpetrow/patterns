<?php

require_once __DIR__ . '/../interface/interfaceBeverage.php';

class Decaf implements Beverage {

    protected $price       = 300;
    protected $description = 'Без кофеина';

    public function cost() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description . '<br>';
    }

}
