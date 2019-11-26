<?php

require_once __DIR__ . '/../../../components/TV.php';

abstract class TVCommand implements Command {

    public function execute() {
        $this->prevStatus = $this->TV->getStatus();
    }

    public function undo() {
        if ($this->prevStatus === TV::OFF) {
            if ($this->TV->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->TV->getStatus();
            }
            $this->TV->off();
        } elseif ($this->prevStatus === TV::ON) {
            if ($this->TV->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->TV->getStatus();
            }
            $this->TV->on();
        }
    }

}
