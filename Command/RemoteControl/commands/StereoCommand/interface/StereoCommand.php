<?php

require_once __DIR__ . '/../../../components/Stereo.php';

abstract class StereoCommand implements Command {

    public function execute() {
        $this->prevStatus = $this->stereo->getStatus();
    }

    public function undo() {
        if ($this->prevStatus === Stereo::OFF) {
            if ($this->stereo->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->stereo->getStatus();
            }
            $this->stereo->off();
        } elseif ($this->prevStatus === Stereo::ON) {
            if ($this->stereo->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->stereo->getStatus();
            }
            $this->stereo->on();
        }
    }

}
