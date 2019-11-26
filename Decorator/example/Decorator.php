<?php

interface Component {

    public function operation();
}

class ConcreteComponent implements Component {

    public function operation() {
        return "ConcreteComponent";
    }

}

class Decorator implements Component {

    protected $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation() {
        return $this->component->operation();
    }

}

class ConcreteDecoratorA extends Decorator {

    public function operation() {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }

}

class ConcreteDecoratorB extends Decorator {

    public function operation() {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }

}

function clientCode(Component $component) {
    echo "RESULT: " . $component->operation();
}
