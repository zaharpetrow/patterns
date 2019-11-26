<?php

require_once __DIR__ . '/decorators/QuackCounter.php';
require_once __DIR__ . '/composite/Flock.php';
require_once __DIR__ . '/abstractFactorys/DuckFactory/CountingDuckFactory.php';
require_once __DIR__ . '/abstractFactorys/GooseFactory/AdapterGooseFactory.php';
require_once __DIR__ . '/observer/Quackologist.php';

class DuckSimulator {

    private $duckFactory;
    private $gooseFactory;
//    
    private $mallarDuck;
    private $mallarOne;
    private $mallarTwo;
    private $mallarThree;
    private $mallarFour;
    private $redheadDuck;
    private $duckCall;
    private $rubberDuck;
    private $gooseDuck;
//    
    private $flockOfDucks;
    private $flockOfMallards;
//
    private $quackologist;

    public function simulate() {
        $this->duckFactory  = new CountingDuckFactory();
        $this->gooseFactory = new AdapterGooseFactory();
        $this->flockOfDucks = new Flock();

        $this->mallarDuck  = $this->duckFactory->createMallardDuck();
        $this->redheadDuck = $this->duckFactory->createRedheadDuck();
        $this->duckCall    = $this->duckFactory->createDuckCall();
        $this->rubberDuck  = $this->duckFactory->createRubberDuck();
        $this->gooseDuck   = $this->gooseFactory->createGooseAdapter();

        $this->flockOfDucks->push($this->duckCall);
        $this->flockOfDucks->push($this->gooseDuck);
        $this->flockOfDucks->push($this->redheadDuck);
        $this->flockOfDucks->push($this->rubberDuck);

        $this->flockOfMallards = new Flock();

        $this->mallarOne   = $this->duckFactory->createMallardDuck();
        $this->mallarTwo   = $this->duckFactory->createMallardDuck();
        $this->mallarThree = $this->duckFactory->createMallardDuck();
        $this->mallarFour  = $this->duckFactory->createMallardDuck();

        $this->flockOfMallards->push($this->mallarOne);
        $this->flockOfMallards->push($this->mallarTwo);
        $this->flockOfMallards->push($this->mallarThree);
        $this->flockOfMallards->push($this->mallarFour);

        $this->flockOfDucks->push($this->flockOfMallards);

        echo 'Duck Simulator: With Observer<br>';
        $this->quackologist = new Quackologist();
        $this->flockOfDucks->registerObserver($this->quackologist);

        $this->quack($this->flockOfDucks);

        echo "The ducks quacked " . QuackCounter::getQuacks() . " times";
    }

    public function quack(Quackable $duck) {
        $duck->quack();
    }

}
