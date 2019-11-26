<?php

require_once __DIR__ . '/Exceptions/ErrorHandler.php';
require_once __DIR__ . '/DirsComponent/DirsComponent.php';
require_once __DIR__ . '/FileLeaf/FileLeaf.php';

$main = new DirsComponent('Root', '../../../');
$main->printR();