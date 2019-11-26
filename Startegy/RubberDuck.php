<?php

require_once 'Duck/quack/Squeak.php';
require_once 'Duck/Duck.php';

class RubberDuck extends Duck {

    public function display() {
        $this->setName('Rubber Duck<br>');
        echo $this->getName();
        $this->swim();
        $this->quack();
    }

    public function quack() {
        $quack = new Squeak();
        $quack->quack();
    }

}
