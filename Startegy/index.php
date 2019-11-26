<?php

require_once 'MallardDuck.php';
require_once 'DecoyDuck.php';
require_once 'RedheadDuck.php';
require_once 'RubberDuck.php';

require_once 'Decoy.php';

$mallarDuck  = new MallardDuck();
$mallarDuck->display();
echo '<br>';
$decoyDuck   = new DecoyDuck();
$decoyDuck->display();
echo '<br>';
$redheadDuck = new RedheadDuck();
$redheadDuck->display();
echo '<br>';
$rubberDuck  = new RubberDuck();
$rubberDuck->display();
echo '<br>';
$decoy       = new Decoy();
$decoy->display();
echo '<br>';
