<?php

require_once __DIR__ . '/interface/Observer.php';

class Quackologist implements Observer {

    public function update(\QuackObservable $duck) {
        echo "Quackologist: {$duck->getName()} just quacked.<br>";
    }

}
