<?php

require_once 'Decorator.php';

$simple = new ConcreteComponent();
echo "Client: I've got a simple component:<br>";
clientCode($simple);

echo '<br><br>';

$decorator1 = new ConcreteDecoratorA($simple);
$decorator2 = new ConcreteDecoratorB($decorator1);
$decorator3 = new ConcreteDecoratorB($decorator2);
echo "Client: Now I've got a decorated component:<br>";
clientCode($decorator3);
