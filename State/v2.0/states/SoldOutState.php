<?php

require_once __DIR__ . '/../interface/State.php';

class SoldOutState implements State {

    public $gumballMachine;

    public function __construct(GumballMachineV2 $gumballMachine) {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter() {
        echo "<span style=\"color:red\">You can't insert a quarter, the machine is sold out</span>\n";
    }

    public function ejectQuarter() {
        echo "<span style=\"color:red\">You can't eject, you haven't inserted a quarter yet</span>\n";
    }

    public function turnCrank() {
        echo "<span style=\"color:red\">You turned but there are no bumballs</span>\n";
    }

    public function dispense() {
        echo "<span style=\"color:red\">No gumball dispensed</span>\n";
    }

}
