<?php

require_once __DIR__ . '/../interface/FlyBehavior.php';

class FlyNoWay implements FlyBehavior {

    public function fly() {
        echo 'Утка НЕ летает<br>';
    }

}
