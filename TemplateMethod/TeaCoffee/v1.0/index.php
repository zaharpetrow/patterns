<?php

require_once 'Coffee.php';
require_once 'Tea.php';

$coffee = new Coffee();
$tea    = new Tea();

$coffee->prepareRecipe();
echo '<br>';
$tea->prepareRecipe();
