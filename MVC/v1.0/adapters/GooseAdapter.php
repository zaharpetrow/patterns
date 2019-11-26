<?php

require_once __DIR__ . '/../interface/Quackable.php';
require_once __DIR__ . '/../goose/Goose.php';

class GooseAdapter implements Quackable {

    public $goose;
    public $name = 'Goose';
    public $observable;

    public function __construct(Goose $goose) {
        $this->goose      = $goose;
        $this->observable = new Observable($this);
    }

    public function registerObserver(\Observer $observer) {
        $this->observable->registerObserver($observer);
    }

    public function notifyObservers() {
        $this->observable->notifyObservers();
    }

    public function quack() {
        $this->goose->honk();
        $this->notifyObservers();
    }

    public function getName() {
        return $this->name;
    }

}
