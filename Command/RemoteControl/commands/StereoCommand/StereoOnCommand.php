<?php

require_once __DIR__ . '/../interface/Command.php';
require_once __DIR__ . '/interface/StereoCommand.php';

class StereoOnCommand extends StereoCommand {

    protected $stereo;
    protected $prevStatus;

    public function __construct(Stereo $stereo) {
        $this->stereo = $stereo;
    }

    public function execute() {
        parent::execute();
        $this->stereo->on();
    }

    public function getClass() {
        return __CLASS__;
    }

}
