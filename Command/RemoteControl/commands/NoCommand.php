<?php

require_once __DIR__ . '/interface/Command.php';
require_once __DIR__ . '/../components/GarageDoor.php';

class NoCommand implements Command {

    public function execute() {
        echo 'DEFAULT<br>';
    }

    public function undo() {
        echo 'DEFAULT<br>';
    }

    public function getClass() {
        return __CLASS__;
    }

}
