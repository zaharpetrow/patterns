<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Abstract/concrete/ProductPage.php';
require_once __DIR__ . '/Abstract/concrete/SimplePage.php';
require_once __DIR__ . '/Implementation/concrete/HTMLRenderer.php';
require_once __DIR__ . '/Implementation/concrete/JsonRenderer.php';

$HTMLRenderer = new HTMLRenderer();
$JSONRenderer = new JsonRenderer();

$page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
echo $page->view();
$page->changeRenderer($JSONRenderer);
echo $page->view();


echo '<br><br>';


$product = new Product('123', 'Star Wars, episode 1', 'A long time ago in a galaxy far, far away...', '/images/star-wars.jpeg', 39.99);

$page = new ProductPage($HTMLRenderer, $product);
echo $page->view();
$page->changeRenderer($JSONRenderer);
echo $page->view();
