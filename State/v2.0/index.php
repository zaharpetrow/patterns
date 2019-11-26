<?php
require_once 'GumballMachineV2.php';
require_once 'GumballMonitor.php';
?>
<pre><?php
    $gumballMachine = new GumballMachineV2('Hall', 3);
    $gumballMonitor = new GumballMonitor($gumballMachine);
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMachine->fill(5);
    $gumballMachine->fill(5);
    $gumballMachine->insertQuarter();
    $gumballMachine->turnCrank();
    $gumballMonitor->report();
    ?>
</pre>