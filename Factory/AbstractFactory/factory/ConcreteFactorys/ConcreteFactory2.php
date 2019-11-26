<?php

require_once __DIR__ . '/../AbstractFactory/AbstractFactory.php';

class ConcreteFactory2 implements AbstractFactory {

    public function createProductA(): AbstractProductA {
        return new ConcreteProductA2();
    }

    public function createProductB(): AbstractProductB {
        return new ConcreteProductB2();
    }

}
