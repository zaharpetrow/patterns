<?php

require_once 'Alice.php';

$pancakeHouseMenu = new Menu('PANCAKE HOUSE MENU', 'Breakfast');
$dinerMenu        = new Menu('DINER MENU', 'Lunch');
$cafeMenu         = new Menu('CAFE MENU', 'Dinner');
$dessertMenu      = new Menu('DESSERT MENU', 'Dessert of course!');

$allMenus = new Menu('ALL MENU', 'All menus combined');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);

$pancakeHouseMenu->add(new MenuItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", TRUE, 2.99));
$pancakeHouseMenu->add(new MenuItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", FALSE, 2.99));
$pancakeHouseMenu->add(new MenuItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", TRUE, 3.49));
$pancakeHouseMenu->add(new MenuItem("Waffles", "Waffles, with your choice of blueberries or strawberries", TRUE, 3.59));

$dinerMenu->add(new MenuItem("Vegetarian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", TRUE, 2.99));
$dinerMenu->add(new MenuItem("BLT", "Bacon with lettuce & tomato on whole wheat", FALSE, 2.99));
$dinerMenu->add(new MenuItem("Soup of the day", "Soup of the day, with a side of potato salad", FALSE, 3.29));
$dinerMenu->add(new MenuItem("Hotdog", "A hot dog, with saurkraut, relish, onions, topped with cheese", FALSE, 3.05));

$dinerMenu->add(new MenuItem('Pasta', 'Spaghetti with Marinara Sauce, and a slice of sourdough bread', TRUE, 3.89));

$dinerMenu->add($dessertMenu);

$dessertMenu->add(new MenuItem('Apple Pie', 'Apple pie with a flakey crust, topped with vanilla icecream', TRUE, 1.59));

$alice = new Alice($allMenus);
$alice->printMenu();
$alice->printVegetarianMenu();