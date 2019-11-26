<?php

require_once __DIR__ . '/AbstractFactory/AbstractFactory.php';

$winFactoryGUI = new AbstractFactory(new WinFactory());
$macFactoryGUI = new AbstractFactory(new MacFactory());
echo $winFactoryGUI->createBatton();
echo '<br>';
echo $winFactoryGUI->createWindow();
echo '<br>';
echo $macFactoryGUI->createBatton();
echo '<br>';
echo $macFactoryGUI->createWindow();
