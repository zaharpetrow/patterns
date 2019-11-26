<?php

class Stereo {

    const ON  = 1;
    const OFF = 0;

    protected $status;

    public function __construct() {
        $this->status = self::OFF;
    }

    public function on() {
        $this->status = self::ON;
        echo 'Stereo on<br>';
    }

    public function off() {
        $this->status = self::OFF;
        echo 'Stereo off<br>';
    }

    public function getStatus() {
        return $this->status;
    }

}
