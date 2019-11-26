<?php

require_once __DIR__ . '/../interface/QuackBehavior.php';

class Squeak implements QuackBehavior {

    public function quack() {
        echo 'Утка пищит<br>';
    }

}
