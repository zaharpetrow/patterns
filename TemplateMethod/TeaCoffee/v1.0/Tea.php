<?php

class Tea {

    public function prepareRecipe() {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function steepTeaBag() {
        echo 'Заваривание чая<br>';
    }

    public function addLemon() {
        echo 'Добавление лемона<br>';
    }

    public function boilWater() {
        echo 'Кипячение воды<br>';
    }

    public function pourInCup() {
        echo 'Наполнение чашки<br>';
    }

}
