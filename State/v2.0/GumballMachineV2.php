<?php

require_once __DIR__ . '/states/HasQuarterState.php';
require_once __DIR__ . '/states/NoQuarterState.php';
require_once __DIR__ . '/states/SoldOutState.php';
require_once __DIR__ . '/states/WinnerState.php';
require_once __DIR__ . '/states/SoldState.php';

class GumballMachineV2 {

    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $winnerState;
    private $state;
    private $location;
    private $count = 0;

    public function __construct(string $location, int $count) {
        $this->soldOutState    = new SoldOutState($this);
        $this->noQuarterState  = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState       = new SoldState($this);
        $this->winnerState     = new WinnerState($this);
        $this->location        = $location;

        $this->count = $count;
        $this->state = $this->soldOutState;
        if ($count > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter() {
        $this->state->insertQuarter();
    }

    public function ejectQuarter() {
        $this->state->ejectQuarter();
    }

    public function turnCrank() {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function releaseBall() {
        echo "<span style=\"color:#20da42\">A gumball comes rolling out the slot</span>\n";
        if ($this->count !== 0) {
            $this->count--;
        }
    }

    public function fill(int $gumballs) {
        $this->count += $gumballs;
        if ($this->count > 0 && $this->getState() === $this->getSoldOutState()) {
            $this->setState($this->getNoQuarterState());
        }
        echo "<span style=\"color:#20da42\">Gumballs added in gumballmachine!</span>\n";
        echo "<span style=\"color:#20da42\">Gumballs: {$this->getCount()}</span>\n";
    }

    public function getLocation(): string {
        return $this->location;
    }

    public function getSoldOutState(): SoldOutState {
        return $this->soldOutState;
    }

    public function getNoQuarterState(): NoQuarterState {
        return $this->noQuarterState;
    }

    public function getHasQuarterState(): HasQuarterState {
        return $this->hasQuarterState;
    }

    public function getSoldState(): SoldState {
        return $this->soldState;
    }

    public function getWinnerState(): WinnerState {
        return $this->winnerState;
    }

    public function getCount(): int {
        return $this->count;
    }

    public function getState(): State {
        return $this->state;
    }

}
