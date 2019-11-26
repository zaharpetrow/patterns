<?php

class Factory {

    static function start() {
        require_once __DIR__ . '/creators/ConcreteCreators/ConcreteCreatorA.php';
        require_once __DIR__ . '/creators/ConcreteCreators/ConcreteCreatorB.php';

        require_once __DIR__ . '/products/ConcreteProducts/ConcreteProduct1.php';
        require_once __DIR__ . '/products/ConcreteProducts/ConcreteProduct2.php';
        
        $creatorA=new ConcreteCreatorA();
        echo $creatorA->someOperation();
        echo '<br>';
        $creatorB=new ConcreteCreatorB();
        echo $creatorB->someOperation();
    }

}
