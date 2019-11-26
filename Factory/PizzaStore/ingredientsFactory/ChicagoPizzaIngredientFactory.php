<?php

require_once __DIR__ . '/PizzaIngredientFactory.php';
require_once __DIR__ . '/ingredients/ingredients.php';

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory {

    public function createDough() {
        return new ThickCrustDough();
    }

    public function createSauce() {
        return new PrumTomatoSauce();
    }

    public function createCheese() {
        return new MozzarellaCheese();
    }

    public function createVeggies() {
        $veggies = [
            new BlackOlives(),
            new Spinach(),
            new Eggplant()
        ];
        return $veggies;
    }

    public function createPepperoni() {
        return new SlicedPepperoni();
    }

    public function createClam() {
        return new FrozenClams();
    }

}
