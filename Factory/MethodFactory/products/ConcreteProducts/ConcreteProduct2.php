<?php

require_once __DIR__ . '/../Product/Product.php';

class ConcreteProduct2 implements Product {

    public function operation(): string {
        return "{Result of the ConcreteProduct2}";
    }

}
