<?php

require_once __DIR__ . '/../interface/FlyBehavior.php';

class FlyWithWings implements FlyBehavior {

    public function fly() {
        echo 'Утка летает<br>';
    }

}
