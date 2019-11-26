<?php

require_once __DIR__ . '/../Creator/Creator.php';

class ConcreteCreatorA extends Creator {

    public function factoryMethod(): Product {
        return new ConcreteProduct1();
    }

}
