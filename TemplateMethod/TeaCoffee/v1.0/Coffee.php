<?php

class Coffee {

    public function prepareRecipe() {
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function brewCoffeeGrinds() {
        echo 'Заваривание кофе<br>';
    }

    public function addSugarAndMilk() {
        echo 'Добавление сахара и молока<br>';
    }

    public function boilWater() {
        echo 'Кипячение воды<br>';
    }

    public function pourInCup() {
        echo 'Наполнение чашки<br>';
    }

}
