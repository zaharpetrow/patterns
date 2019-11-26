<?php

require_once __DIR__ . '/../interface/QuackBehavior.php';

class MuteQuack implements QuackBehavior {

    public function quack() {
        echo 'Утка НЕ квакает<br>';
    }

}
