<?php

require_once 'Duck/quack/Quack.php';
require_once 'Duck/fly/FlyWithWings.php';
require_once 'Duck/Duck.php';

class RedheadDuck extends Duck {

    public function display() {
        $this->setName('Redhead Duck<br>');
        echo $this->getName();
        $this->swim();
        $this->fly();
        $this->quack();
    }

    public function quack() {
        $quack = new QuackDefault();
        $quack->quack();
    }

    public function fly() {
        $fly = new FlyWithWings();
        $fly->fly();
    }

}
