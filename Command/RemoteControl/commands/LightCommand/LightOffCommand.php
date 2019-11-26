<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/../../components/Light.php';

class LightOffCommand implements Command {

    public $light;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        $this->light->off();
    }

    public function undo() {
        $this->light->on();
    }

    public function getClass() {
        return __CLASS__;
    }

}
