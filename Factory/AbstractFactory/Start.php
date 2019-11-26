<?php

class Starter {

    static function start() {
        require_once 'factory/ConcreteFactorys/ConcreteFactory1.php';
        require_once 'factory/ConcreteFactorys/ConcreteFactory2.php';

        require_once 'products/ConcreteProducts/ConcreteProductA1.php';
        require_once 'products/ConcreteProducts/ConcreteProductA2.php';
        require_once 'products/ConcreteProducts/ConcreteProductB1.php';
        require_once 'products/ConcreteProducts/ConcreteProductB2.php';


        $creator1 = new ConcreteFactory1();
        $creator2 = new ConcreteFactory2();

        $productA = $creator1->createProductA();
        $productB = $creator2->createProductB();

        echo $productB->usefulFunctionB() . '<br>';
        echo $productB->anotherUsefulFunctionB($productA) . '<br>';
        echo '<br>';
        echo $productA->usefulFunctionA() . '<br>';
    }

}
