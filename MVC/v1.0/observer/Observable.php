<?php

require_once __DIR__ . '/interface/QuackObservable.php';

class Observable implements QuackObservable {

    public $observers;
    public $duck;

    public function __construct(QuackObservable $duck) {
        $this->observers = new SplStack();
        $this->duck      = $duck;
    }

    public function registerObserver(\Observer $observer) {
        $this->observers->push($observer);
    }

    public function notifyObservers() {
        $this->observers->rewind();
        while ($this->observers->current()) {
            $this->observers->current()->update($this->duck);
            $this->observers->next();
        }
    }

}
