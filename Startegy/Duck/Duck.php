<?php

abstract class Duck {

    protected $name;

    public function swim() {
        echo 'Утка плавает<br>';
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function display();
}
