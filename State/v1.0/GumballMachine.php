<?php

class GumballMachine {

    const SOLD_OUT    = 0;
    const NO_QUARTER  = 1;
    const HAS_QUARTER = 2;
    const SOLD        = 3;

    private $state = self::SOLD_OUT;
    private $count = 0;

    public function __construct(int $count) {
        $this->count = $count;
        if ($count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter() {
        if ($this->state === self::HAS_QUARTER) {
            echo "<span style=\"color:red\">You can't insert another quarter</span>\n";
        } elseif ($this->state === self::NO_QUARTER) {
            $this->state = self::HAS_QUARTER;
            echo "<span style=\"color:#20da42\">You inserted a quarter</span>\n";
        } elseif ($this->state === self::SOLD_OUT) {
            echo "<span style=\"color:red\">You can't insert a quarter, the machine is sold out</span>\n";
        } elseif ($this->state === self::SOLD) {
            echo "<span style=\"color:#20da42\">Please wait, we're already giving you a gumball</span>\n";
        }
    }

    public function ejectQuarter() {
        if ($this->state === self::HAS_QUARTER) {
            echo "<span style=\"color:#20da42\">Quarter returned</span>\n";
            $this->state = self::NO_QUARTER;
        } elseif ($this->state === self::NO_QUARTER) {
            echo "<span style=\"color:red\">You haven't inserted a quarter</span>\n";
        } elseif ($this->state === self::SOLD) {
            echo "<span style=\"color:red\">Sorry, you already turned the crank</span>\n";
        } elseif ($this->state === self::SOLD_OUT) {
            echo "<span style=\"color:red\">You can't eject, you haven't inserted a quarter yet</span>\n";
        }
    }

    public function turnCrank() {
        if ($this->state === self::SOLD) {
            echo "<span style=\"color:red\">Turning twice doesn't get you another gumball!</span>\n";
        } elseif ($this->state === self::NO_QUARTER) {
            echo "<span style=\"color:red\">You turned but there's no quarter</span>\n";
        } elseif ($this->state === self::SOLD_OUT) {
            echo "<span style=\"color:red\">You turned but there are no bumballs</span>\n";
        } elseif ($this->state === self::HAS_QUARTER) {
            echo "<span style=\"color:#20da42\">You turned...</span>\n";
            $this->state = self::SOLD;
            $this->dispense();
        }
    }

    public function dispense() {
        if ($this->state === self::SOLD) {
            echo "<span style=\"color:#20da42\">A gumball comes rolling out the slot</span>\n";
            $this->count--;
            if ($this->count === 0) {
                echo "<span style=\"color:red\">Oops, out of gumballs!</span>\n";
                $this->state = self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } elseif ($this->state === self::NO_QUARTER) {
            echo "<span style=\"color:red\">You need to pay first</span>\n";
        } elseif ($this->state === self::SOLD_OUT) {
            echo "<span style=\"color:red\">No gumball dispensed</span>\n";
        } elseif ($this->state === self::HAS_QUARTER) {
            echo "<span style=\"color:red\">No gumball dispensed</span>\n";
        }
    }

}
