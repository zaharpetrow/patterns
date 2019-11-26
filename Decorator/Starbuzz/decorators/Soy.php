<?php

require_once __DIR__ . '/Decorator.php';

class Soy extends Decorator {

    protected $price       = 25;
    protected $description = 'Соя';

    public function cost() {
        return parent::cost() + $this->price;
    }

    public function getDescription() {
        $text = parent::getDescription();
        return $text . $this->description . '<br>';
    }

}
