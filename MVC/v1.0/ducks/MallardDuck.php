<?php

require_once __DIR__ . '/../interface/Quackable.php';
require_once __DIR__ . '/../observer/Observable.php';

class MallardDuck implements Quackable {

    public $observable;
    public $name = 'Mallard Duck';

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
