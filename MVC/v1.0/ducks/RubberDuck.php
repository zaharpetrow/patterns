<?php

require_once __DIR__ . '/../interface/Quackable.php';

class RubberDuck implements Quackable {

    public $observable;
    public $name = 'Rubber Duck';

    public function __construct() {
        $this->observable = new Observable($this);
    }

    public function registerObserver(\Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function quack() {
        echo 'Squack<br>';
        $this->notifyObservers();
    }

    public function getName() {
        return $this->name;
    }

}
