<?php

require_once __DIR__ . '/../../ducks/DuckCall.php';
require_once __DIR__ . '/../../ducks/RubberDuck.php';
require_once __DIR__ . '/../../ducks/MallardDuck.php';
require_once __DIR__ . '/../../ducks/RedheadDuck.php';
require_once __DIR__ . '/AbstractDuckFactory.php';

class CountingDuckFactory extends AbstractDuckFactory {

    public function createMallardDuck() {
        return new QuackCounter(new MallardDuck());
    }

    public function createDuckCall() {
        return new QuackCounter(new DuckCall());
    }

    public function createRedheadDuck() {
        return new QuackCounter(new RedheadDuck());
    }

    public function createRubberDuck() {
        return new QuackCounter(new RubberDuck());
    }

}
