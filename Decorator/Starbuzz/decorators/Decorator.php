<?php

require_once __DIR__ . '/../interface/interfaceBeverage.php';

class Decorator implements Beverage {

    protected $beverage;
    protected $price;

    public function __construct(Beverage $beverage) {
        $this->beverage = $beverage;
    }

    public function cost() {
        return $this->beverage->cost();
    }

    public function getDescription() {
        return $this->beverage->getDescription();
    }

    public function getPrice() {
        return $this->price;
    }

}
