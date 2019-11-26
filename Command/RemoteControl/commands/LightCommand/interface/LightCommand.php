<?php

require_once __DIR__ . '/../../../components/Light.php';

abstract class LightCommand implements Command {

    public function execute() {
        $this->prevStatus = $this->light->getStatus();
    }

    public function undo() {
        if ($this->prevStatus === Light::OFF) {
            if ($this->light->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->light->getStatus();
            }
            $this->light->off();
        } elseif ($this->prevStatus === Light::ON) {
            if ($this->light->getStatus() !== $this->prevStatus) {
                $this->prevStatus = $this->light->getStatus();
            }
            $this->light->on();
        }
    }

}
