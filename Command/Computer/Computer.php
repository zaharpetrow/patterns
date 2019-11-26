<?php

class Display {

    static function start() {
        $computer = new Comp();
        $user     = new User(new StartCommand($computer), new StopCommand($computer), new ResetCommand($computer));

        $user->startComp();
        $user->stopComp();
        $user->resetComp();
    }

}

interface CommandC {

    public function execute();
}

class Comp {

    public function start() {
        echo 'START<br>';
    }

    public function stop() {
        echo 'STOP<br>';
    }

    public function reset() {
        echo 'RESET<br>';
    }

}

abstract class CommandComp implements CommandC {

    public $comp;

    public function __construct(Comp $comp) {
        $this->comp = $comp;
    }

}

class StartCommand extends CommandComp {

    public function execute() {
        $this->comp->start();
    }

}

class StopCommand extends CommandComp {

    public function execute() {
        $this->comp->stop();
    }

}

class ResetCommand extends CommandComp {

    public function execute() {
        $this->comp->reset();
    }

}

class User {

    public $start;
    public $stop;
    public $reset;

    public function __construct(CommandC $start, CommandC $stop, CommandC $reset) {
        $this->start = $start;
        $this->stop  = $stop;
        $this->reset = $reset;
    }

    public function startComp() {
        $this->start->execute();
    }

    public function stopComp() {
        $this->stop->execute();
    }

    public function resetComp() {
        $this->reset->execute();
    }

}
