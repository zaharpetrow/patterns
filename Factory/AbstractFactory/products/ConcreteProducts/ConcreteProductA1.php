<?php

require_once __DIR__ . '/../AbstractProduct/AbstractProductA.php';

class ConcreteProductA1 implements AbstractProductA {

    public function usefulFunctionA(): string {
        return "The result of the product A1.";
    }

}
