<?php

require_once 'PizzaStore.php';

$NY = new NYPizzaStore();
$NY->orderPizza('cheese');

echo '<br>';

$ch = new ChicagoPizzaStore();
$ch->orderPizza('clam');
