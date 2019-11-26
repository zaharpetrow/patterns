<?php

require_once __DIR__ . '/../Creator/Creator.php';

class ConcreteCreatorB extends Creator {

    public function factoryMethod(): Product {
        return new ConcreteProduct2();
    }

}
