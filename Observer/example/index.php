<?php
require_once 'Subject.php';
require_once 'Observer.php';

$subject = new Subject();

$o1 = new ConcreteObserverA();
$subject->attach($o1);

$o2 = new ConcreteObserverB();
$subject->attach($o2);
?>
<pre><?php
$subject->someBusinessLogic();
$subject->someBusinessLogic();
?></pre>