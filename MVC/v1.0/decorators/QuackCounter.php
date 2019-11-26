<?php

require_once __DIR__ . '/../interface/Quackable.php';
require_once __DIR__ . '/../observer/Observable.php';

class QuackCounter implements Quackable {

    public $duck;
    public $observable;
    static private $numberOfQuacks;

    public function __construct(Quackable $duck) {
        $this->duck = $duck;
    }

    public function quack() {
        $this->duck->quack();
        self::$numberOfQuacks++;
    }

    static function getQuacks(): int {
        return self::$numberOfQuacks;
    }

    public function registerObserver(\Observer $observer) {
        $this->duck->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->duck->notifyObservers();
    }

}
