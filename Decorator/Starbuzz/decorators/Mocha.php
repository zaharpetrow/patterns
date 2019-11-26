<?php

require_once __DIR__ . '/Decorator.php';

class Mocha extends Decorator {

    protected $price       = 20;
    protected $description = 'Шоколад';

    public function cost() {
        return parent::cost() + $this->price;
    }

    public function getDescription() {
        $text = parent::getDescription();
        return $text . $this->description . '<br>';
    }

}
