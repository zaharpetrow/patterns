<?php

require_once __DIR__ . '/../interface/State.php';

class NoQuarterState implements State {

    public $gumballMachine;

    public function __construct(GumballMachineV2 $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "<span style=\"color:#20da42\">You inserted a quarter</span>\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter() {
        echo "<span style=\"color:red\">You haven't inserted a quarter</span>\n";
    }

    public function turnCrank() {
        echo "<span style=\"color:red\">You turned but there's no quarter</span>\n";
    }

    public function dispense() {
        echo "<span style=\"color:red\">You need to pay first</span>\n";
    }

}
