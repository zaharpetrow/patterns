<?php

require_once __DIR__ . '/../Factory/concrete/MacFactory.php';
require_once __DIR__ . '/../Factory/concrete/WinFactory.php';

class AbstractFactory {

    public $factory;

    public function __construct(Factory $factory) {
        $this->factory = $factory;
    }

    public function createWindow() {
        return $this->factory->createWindow()->getName();
    }

    public function createBatton() {
        return $this->factory->createBatton()->getName();
    }

}
