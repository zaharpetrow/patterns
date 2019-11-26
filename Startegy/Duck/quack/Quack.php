<?php

require_once __DIR__ . '/../interface/QuackBehavior.php';

class QuackDefault implements QuackBehavior {

    public function quack() {
        echo 'Утка квакает<br>';
    }

}
