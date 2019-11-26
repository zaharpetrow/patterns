<?php

require_once __DIR__ . '/../observer/interface/QuackObservable.php';

interface Quackable extends QuackObservable {

    public function quack();
}
