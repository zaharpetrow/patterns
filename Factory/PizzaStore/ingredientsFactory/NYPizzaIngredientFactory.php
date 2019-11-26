<?php

require_once __DIR__ . '/PizzaIngredientFactory.php';
require_once __DIR__ . '/ingredients/ingredients.php';

class NYPizzaIngredientFactory implements PizzaIngredientFactory {

    public function createDough() {
        return new ThinCrustDough();
    }

    public function createSauce() {
        return new MarinaraSauce();
    }

    public function createCheese() {
        return new ReggianoCheese();
    }

    public function createVeggies() {
        $veggies = [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
        return $veggies;
    }

    public function createPepperoni() {
        return new SlicedPepperoni();
    }

    public function createClam() {
        return new FreshClams();
    }

}
