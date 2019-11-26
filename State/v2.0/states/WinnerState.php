<?php

require_once __DIR__ . '/../interface/State.php';

class WinnerState implements State {

    public $gumballMachine;

    public function __construct(GumballMachineV2 $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "<span style=\"color:#20da42\">Please wait, we're already giving you a gumball</span>\n";
    }

    public function ejectQuarter() {
        echo "<span style=\"color:red\">Sorry, you already turned the crank</span>\n";
    }

    public function turnCrank() {
        echo "<span style=\"color:red\">Turning twice doesn't get you another gumball!</span>\n";
    }

    public function dispense() {
        echo "<span style=\"color:#20da42\">YOU'RE A WINNER! You get two gumballs for your quarter</span>\n";
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() === 0) {
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                echo "<span style=\"color:red\">Oops, out of gumballs!</span>\n";
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }

}
