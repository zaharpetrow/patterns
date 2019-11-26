<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/../../components/GarageDoor.php';

class GarageDoorCloseCommand implements Command {

    public $garageDoor;

    public function __construct(GarageDoor $garageDoor) {
        $this->garageDoor = $garageDoor;
    }

    public function execute() {
        $this->garageDoor->down();
    }

    public function undo() {
        $this->garageDoor->up();
    }

    public function getClass() {
        return __CLASS__;
    }

}
