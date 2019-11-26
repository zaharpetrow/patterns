<?php

require_once __DIR__ . '/Decorator.php';

class Whip extends Decorator {

    protected $price       = 13;
    protected $description = 'Взбить';

    public function cost() {
        return parent::cost() + $this->price;
    }

    public function getDescription() {
        $text = parent::getDescription();
        return $text . $this->description . '<br>';
    }

}
