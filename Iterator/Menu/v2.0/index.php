<?php

require_once 'Alice.php';

$alice = new Alice();

$pancakeHouseMenu = new PancakeHouseMenu();
$dinerMenu        = new DinerMenu();

$alice->addMenu($pancakeHouseMenu);
$alice->addMenu($dinerMenu);
$alice->printMenu();
