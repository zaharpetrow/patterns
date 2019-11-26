<?php

require_once __DIR__ . '/../interface/Quackable.php';

class RedheadDuck implements Quackable {

    public $observable;
    public $name = 'Redhead Duck';

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
        echo 'Quack<br>';
        $this->notifyObservers();
    }

    public function getName() {
        return $this->name;
    }

}
