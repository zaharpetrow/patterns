<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/interface/LightCommand.php';

class LightOnCommand extends LightCommand {

    protected $light;
    protected $prevStatus;

    public function __construct(Light $light) {
        $this->light = $light;
    }

    public function execute() {
        parent::execute();
        $this->light->on();
    }

    public function getClass() {
        return __CLASS__;
    }

}
