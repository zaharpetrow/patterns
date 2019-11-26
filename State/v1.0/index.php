<?php

require_once 'GumballMachine.php';
?>
<pre>
<?php
$gumballMachine=new GumballMachine(5);

print_r($gumballMachine);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

print_r($gumballMachine);

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();

print_r($gumballMachine);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->ejectQuarter();

print_r($gumballMachine);

$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

print_r($gumballMachine);
?>
</pre>