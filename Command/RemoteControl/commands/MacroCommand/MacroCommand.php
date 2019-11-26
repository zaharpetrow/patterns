<?php

require_once __DIR__ . '/../interface/Command.php';

class MacroCommand implements Command {

    public $commands = [];

    public function __construct(array $commands) {
        foreach ($commands as $command) {
            if (!$command instanceof Command) {
                throw new Exception('Массив $command должен содержать реализации Command');
            }
        }
        $this->commands = $commands;
    }

    public function execute() {
        foreach ($this->commands as $command) {
            $command->execute();
        }
        $this->prevStatus;
    }

    public function undo() {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }

    public function getClass() {
        return __CLASS__;
    }

}
