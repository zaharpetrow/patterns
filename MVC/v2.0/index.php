<?php

require_once 'includes/startup.php';

$registry = new Registry();

$db = new PDO('mysql:host=localhost;dbname=myshop;charset=utf8', 'root', '', [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => FALSE
        ]);

$registry['db'] = $db;

$template             = new Template($registry);
$registry['template'] = $template;

$router             = new Router($registry);
$registry['router'] = $router;

$router->setPath(SITE_PATH . 'controllers');

$router->delegate();
