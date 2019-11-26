<?php

require_once __DIR__ . '/Decorator.php';

class Milk extends Decorator {

    protected $price       = 33;
    protected $description = 'Молоко';

    public function cost() {
        return parent::cost() + $this->price;
    }

    public function getDescription() {
        $text = parent::getDescription();
        return $text . $this->description . '<br>';
    }

}
