<?php

class Singleton {

    private static $uniqueInstance;
    private $test = 1;

    private function __construct() {
        
    }

    public static function getInstance() {
        if (Singleton::$uniqueInstance == NULL) {
            Singleton::$uniqueInstance = new Singleton();
        }
        return Singleton::$uniqueInstance;
    }

    public function test() {
        echo $this->test++ . ' TEST<br>';
    }

}
