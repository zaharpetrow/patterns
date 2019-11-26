<?php

abstract class CoffeineBeverage {

    final public function prepareRecipe() {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    abstract public function brew();

    abstract public function addCondiments();

    public function boilWater() {
        echo 'Кипячение воды<br>';
    }

    public function pourInCup() {
        echo 'Наполнение чашки<br>';
    }

}
