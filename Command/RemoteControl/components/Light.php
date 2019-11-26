<?php

class Light {

    const ON  = 1;
    const OFF = 0;

    protected $status;

    public function __construct() {
        $this->status = self::OFF;
    }

    public function on() {
        $this->status = self::ON;
        echo 'Light on<br>';
    }

    public function off() {
        $this->status = self::OFF;
        echo 'Light off<br>';
    }

    public function getStatus() {
        return $this->status;
    }

}
