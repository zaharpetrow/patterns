<?php

require_once __DIR__ . '/../interface/State.php';

class HasQuarterState implements State {

    public $gumballMachine;

    public function __construct(GumballMachineV2 $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "<span style=\"color:red\">You can't insert another quarter</span>\n";
    }

    public function ejectQuarter() {
        echo "<span style=\"color:#20da42\">Quarter returned</span>\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank() {
        echo "<span style=\"color:#20da42\">You turned...</span>\n";
        $winner = rand(0, 10) === 1 ? TRUE : FALSE;
        if ($winner && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense() {
        echo "<span style=\"color:red\">No gumball dispensed</span>\n";
    }

}
