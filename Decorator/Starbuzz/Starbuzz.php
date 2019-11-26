<?php

class Starbuzz {

    static function start() {

        require_once 'components/DarkRoast.php';
        require_once 'components/Decaf.php';
        require_once 'components/Espresso.php';
        require_once 'components/HouseBlend.php';

        require_once 'decorators/Mocha.php';
        require_once 'decorators/Whip.php';
        require_once 'decorators/Milk.php';
        require_once 'decorators/Soy.php';

        $darkRoast          = new DarkRoast();
        $darkRoastMocha     = new Mocha($darkRoast);
        $darkRoastMochaWhip = new Whip($darkRoastMocha);

        $espressoMochaMochaSoyWhip = new Whip(new Soy(new Mocha(new Mocha(new HouseBlend()))));

        $decaf = new Decaf();
        $decaf = new Milk($decaf);
        $decaf = new Milk($decaf);
        $decaf = new Mocha($decaf);
        $decaf = new Mocha($decaf);
        $decaf = new Whip($decaf);
        $decaf = new Soy($decaf);
        $decaf = new Soy($decaf);
        $decaf = new Soy($decaf);
        $decaf = new Soy($decaf);

        Starbuzz::clientCode($darkRoastMochaWhip);
        Starbuzz::clientCode($espressoMochaMochaSoyWhip);
        Starbuzz::clientCode($decaf);
    }

    private function clientCode(Beverage $beverage) {
        echo "RESULT: " . $beverage->cost();
        echo "<br>";
        echo "Описание:<br>" . $beverage->getDescription();
        echo "<br>";
        echo "<br>";
    }

}
