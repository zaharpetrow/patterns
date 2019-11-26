<?php

require_once 'Singleton.php';

$singleton= Singleton::getInstance();
$singleton1= Singleton::getInstance();
$singleton->test();
$singleton1->test();
unset($singleton);
unset($singleton1);
$newSingleton= Singleton::getInstance();
$newSingleton->test();