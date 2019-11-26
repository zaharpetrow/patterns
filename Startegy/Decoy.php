<?php

class Decoy {

    public function display() {
        echo 'Манок<br>';
        $this->quack();
    }

    public function quack() {
        $quack = new QuackDefault();
        $quack->quack();
    }

}
