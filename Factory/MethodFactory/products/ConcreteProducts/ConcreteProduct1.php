<?php

require_once __DIR__ . '/../Product/Product.php';

class ConcreteProduct1 implements Product {

    public function operation(): string {
        return "{Result of the ConcreteProduct1}";
    }

}
