<?php

require_once __DIR__ . '/../MenuItem/MenuItem.php';

class DinerMenu {

    const MAX_ITEMS = 6;

    private $numberOfItems = 0;
    public $menuItems      = [];

    public function __construct() {
        $this->addItem("Vegetarian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", TRUE, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", FALSE, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", FALSE, 3.29);
        $this->addItem("Hotdog", "A hot dog, with saurkraut, relish, onions, topped with cheese", FALSE, 3.05);
    }

    public function addItem(string $name, string $description, bool $vegetarian, int $price) {
        $menuItem = new MenuItem($name, $description, $vegetarian, $price);

        if ($this->numberOfItems >= self::MAX_ITEMS) {
            throw new Exception("Меню не может быть больше");
        } else {
            $this->menuItems[$this->numberOfItems] = $menuItem;
            $this->numberOfItems++;
        }
    }

    public function getMenuItems(): array {
        return $this->menuItems;
    }

}
