<?php

require_once __DIR__ . '/../AbstractFactory/AbstractFactory.php';

class ConcreteFactory1 implements AbstractFactory {

    public function createProductA(): AbstractProductA {
        return new ConcreteProductA1();
    }

    public function createProductB(): AbstractProductB {
        return new ConcreteProductB1();
    }

}
