<?php

class GumballMonitor {

    private $machine;

    public function __construct(GumballMachineV2 $machine) {
        $this->machine = $machine;
    }

    public function report() {
        echo "<span style=\"color:#7c62e2\">Gumball Machine: {$this->machine->getLocation()}</span>\n";
        echo "<span style=\"color:#7c62e2\">Current inventory: {$this->machine->getCount()} gumballs</span>\n";
        echo "<span style=\"color:#7c62e2\">Current state: {$this->machine->getState()}</span>\n";
    }

}
