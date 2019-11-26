<?php

require_once __DIR__ . '/ArrayList.php';
require_once __DIR__ . '/../../MenuItem/MenuItem.php';
require_once __DIR__ . '/../../Iterator/PancakeHouseIterator.php';
require_once __DIR__ . '/../interface/Menu.php';

class PancakeHouseMenu implements Menu {

    public $menuItems;

    public function __construct() {
        $this->menuItems = new ArrayList();

        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", TRUE, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", FALSE, 2.99);
        $this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", TRUE, 3.49);
        $this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", TRUE, 3.59);
    }

    public function addItem(string $name, string $description, bool $vegetarian, float $price) {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);
        $this->menuItems->add($menuItem);
    }

    public function createIterator(): MyIterator {
        return new PancakeHouseIterator($this->menuItems);
    }

}
