<?php

require_once __DIR__ . '/../interface/interfaceBeverage.php';

class HouseBlend implements Beverage {

    protected $price       = 225;
    protected $description = 'Домашняя смесь';

    public function cost() {
        return $this->price;
    }

    public function getDescription() {
        return $this->description . '<br>';
    }

}
