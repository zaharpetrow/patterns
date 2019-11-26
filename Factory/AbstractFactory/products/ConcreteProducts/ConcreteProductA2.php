<?php

require_once __DIR__ . '/../AbstractProduct/AbstractProductA.php';

class ConcreteProductA2 implements AbstractProductA {

    public function usefulFunctionA(): string {
        return "The result of the product A2.";
    }

}
