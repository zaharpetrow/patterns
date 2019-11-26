<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/../../components/GarageDoor.php';

class GarageDoorOpenCommand implements Command {

    public $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->up();
    }

    public function undo() {
        $this->garageDoor->down();
    }

    public function getClass() {
        return __CLASS__;
    }

}
