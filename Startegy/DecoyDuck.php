<?php

require_once 'Duck/quack/MuteQuack.php';
require_once 'Duck/Duck.php';

class DecoyDuck extends Duck {

    public function display() {
        $this->setName('Decoy Duck<br>');
        echo $this->getName();
        $this->swim();
        $this->quack();
    }

    public function quack() {
        $quack = new MuteQuack();
        $quack->quack();
    }

}
