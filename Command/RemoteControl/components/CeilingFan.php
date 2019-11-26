<?php

class CeilingFan {

    const HIGH   = 3;
    const MEDIUM = 2;
    const LOW    = 1;
    const OFF    = 0;

    public $speed;

    public function __construct() {
        $this->speed = self::OFF;
    }

    public function high() {
        $this->speed = self::HIGH;
        echo 'Высокая скорость винтелятора<br>';
    }

    public function medium() {
        $this->speed = self::MEDIUM;
        echo 'Средняя скорость винтелятора<br>';
    }

    public function low() {
        $this->speed = self::LOW;
        echo 'Низкая скорость винтелятора<br>';
    }

    public function off() {
        $this->speed = self::OFF;
        echo 'Винтелятор выключен<br>';
    }

    public function getSpeed() {
        return $this->speed;
    }

}
