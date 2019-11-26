<?php

require_once 'pizza/Pizza.php';

abstract class PizzaStore {

    protected $ingredientFactory;

    public function orderPizza(String $type) {
        $pizza = $this->createPizza($type);

        if (!$pizza instanceof Pizza)
            return FALSE;

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        $pizza->toString();

        return $pizza;
    }

    abstract protected function createPizza(String $type);
}

class NYPizzaStore extends PizzaStore {

    protected function createPizza(String $type) {
        require_once 'ingredientsFactory/NYPizzaIngredientFactory.php';

        $this->ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($this->ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($this->ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($this->ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($this->ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        } else {
            return NULL;
        }

        if (!$pizza instanceof Pizza)
            return FALSE;

        return $pizza;
    }

}

class ChicagoPizzaStore extends PizzaStore {

    protected function createPizza(String $type) {
        require_once 'ingredientsFactory/ChicagoPizzaIngredientFactory.php';

        $this->ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($this->ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        } else {
            return NULL;
        }

        if (!$pizza instanceof Pizza)
            return FALSE;

        return $pizza;
    }

}
