<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/interface/CeilingFanCommand.php';

class CeilingFanLowCommand extends CeilingFanCommand {

    public $ceilingFan;
    public $prevSpeed;

    public function __construct(CeilingFan $ceilingFan) {
        $this->ceilingFan = $ceilingFan;
    }

    public function execute() {
        parent::execute();
        $this->ceilingFan->low();
    }

    public function getClass() {
        return __CLASS__;
    }

}
