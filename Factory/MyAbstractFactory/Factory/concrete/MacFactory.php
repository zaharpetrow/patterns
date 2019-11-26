<?php

require_once __DIR__ . '/../interface/Factory.php';
require_once __DIR__ . '/../../batton/concrete/BattonMac.php';
require_once __DIR__ . '/../../window/concrete/WindowMac.php';

class MacFactory extends Factory {

    public function createBatton(): Batton {
        return new BattonMac();
    }

    public function createWindow(): Window {
        return new WindowMac();
    }

}
