<?php

abstract class Factory {

    abstract public function createWindow(): Window;

    abstract public function createBatton(): Batton;
}
