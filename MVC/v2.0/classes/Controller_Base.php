<?php

abstract class Controller_Base {

    protected $registry;

    public function __construct($registry) {
        $this->registry = $registry;
    }

    abstract public function index();
}
