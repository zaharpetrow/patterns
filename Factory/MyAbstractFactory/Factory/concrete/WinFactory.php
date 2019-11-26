<?php

require_once __DIR__ . '/../interface/Factory.php';
require_once __DIR__ . '/../../batton/concrete/BattonWin.php';
require_once __DIR__ . '/../../window/concrete/WindowWin.php';

class WinFactory extends Factory {

    public function createBatton(): Batton {
        return new BattonWin();
    }

    public function createWindow(): Window {
        return new WindowWin();
    }

}
