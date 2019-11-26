<?php

interface Cheese {

    public function getName();
}

interface Sauce {

    public function getName();
}

interface Clams {

    public function getName();
}

interface Dough {

    public function getName();
}

class MozzarellaCheese implements Cheese {

    public function getName() {
        echo 'Mozzarella cheese<br>';
    }

}

class ReggianoCheese implements Cheese {

    public function getName() {
        echo 'Reggiano cheese<br>';
    }

}

class ThickCrustDough implements Dough {

    public function getName() {
        echo 'Thick crust Dough<br>';
    }

}

class ThinCrustDough implements Dough {

    public function getName() {
        echo 'Thin crust Dough<br>';
    }

}

class PrumTomatoSauce implements Sauce {

    public function getName() {
        echo 'Plum tomato Sauce<br>';
    }

}

class MarinaraSauce implements Sauce {

    public function getName() {
        echo 'Marinara Sauce<br>';
    }

}

class FrozenClams implements Clams {

    public function getName() {
        echo 'Frozen Clams<br>';
    }

}

class FreshClams implements Clams {

    public function getName() {
        echo 'Fresh Clams<br>';
    }

}
