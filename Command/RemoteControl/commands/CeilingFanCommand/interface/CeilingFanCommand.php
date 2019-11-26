<?php
require_once __DIR__ . '/../../../components/CeilingFan.php';

abstract class CeilingFanCommand implements Command {

    public function execute() {
        $this->prevSpeed = $this->ceilingFan->getSpeed();
    }

    public function undo() {
        if ($this->prevSpeed === CeilingFan::HIGH) {
            if ($this->prevSpeed !== $this->ceilingFan->getSpeed()) {
                $this->prevSpeed = $this->ceilingFan->getSpeed();
            }
            $this->ceilingFan->high();
        } elseif ($this->prevSpeed === CeilingFan::MEDIUM) {
            if ($this->prevSpeed !== $this->ceilingFan->getSpeed()) {
                $this->prevSpeed = $this->ceilingFan->getSpeed();
            }
            $this->ceilingFan->medium();
        } elseif ($this->prevSpeed === CeilingFan::LOW) {
            if ($this->prevSpeed !== $this->ceilingFan->getSpeed()) {
                $this->prevSpeed = $this->ceilingFan->getSpeed();
            }
            $this->ceilingFan->low();
        } elseif ($this->prevSpeed === CeilingFan::OFF) {
            if ($this->prevSpeed !== $this->ceilingFan->getSpeed()) {
                $this->prevSpeed = $this->ceilingFan->getSpeed();
            }
            $this->ceilingFan->off();
        }
    }

}
