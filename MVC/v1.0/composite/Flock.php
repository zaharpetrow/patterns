<?php

class Flock implements Quackable {

    public $quackers;

    public function __construct() {
        $this->quackers   = new SplStack();
    }

    public function registerObserver(\Observer $observer) {
        $this->quackers->rewind();
        while ($this->quackers->current()) {
            $this->quackers->current()->registerObserver($observer);
            $this->quackers->next();
        }
    }

    public function notifyObservers() {
        $this->quackers->rewind();
        while ($this->quackers->current()) {
            $this->quackers->current()->notifyObservers();
            $this->quackers->next();
        }
    }

    public function push(Quackable $quacker) {
        $this->quackers->push($quacker);
    }

    public function quack() {
        $this->quackers->rewind();
        while ($this->quackers->current()) {
            $this->quackers->current()->quack();
            $this->quackers->next();
        }
    }

}
