<?php

abstract class Pizza {

    protected $name = '';
    public $dough;
    public $sauce;
    public $veggies = [];
    public $cheese;
    public $pepperoni;
    public $clam;

    abstract function prepare();

    abstract function toString();

    public function bake() {
        echo 'Bake for 25 minutes at 350C<br>';
    }

    public function cut() {
        echo 'Cutting the pizza into dagonal slices<br>';
    }

    public function box() {
        echo 'Place pizza in official PizzaStore box<br>';
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

}

class CheesePizza extends Pizza {

    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo "Prepparing {$this->name}<br>";
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }

    public function toString() {
        $this->dough->getName();
        $this->sauce->getName();
        $this->cheese->getName();
        echo 'Finish!!!<br>';
    }

}

class ClamPizza extends Pizza {

    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory) {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare() {
        echo "Prepparing {$this->name}<br>";
        $this->dough  = $this->ingredientFactory->createDough();
        $this->sauce  = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clam   = $this->ingredientFactory->createClam();
    }

    public function toString() {
        $this->dough->getName();
        $this->sauce->getName();
        $this->cheese->getName();
        $this->clam->getName();
        echo 'Finish!!!<br>';
    }

}
