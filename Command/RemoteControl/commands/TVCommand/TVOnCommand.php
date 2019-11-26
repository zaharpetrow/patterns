<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/interface/TVCommand.php';

class TVOnCommand extends TVCommand {

    protected $TV;
    protected $prevStatus;

    public function __construct(TV $TV) {
        $this->TV = $TV;
    }

    public function execute() {
        parent::execute();
        $this->TV->on();
    }

    public function getClass() {
        return __CLASS__;
    }

}
