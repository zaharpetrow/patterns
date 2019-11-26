<?php

require_once __DIR__ . '/Components/Menu.php';
require_once __DIR__ . '/Leafs/MenuItem.php';

class Alice {

    public $allMenus;

    public function __construct(MenuComponent $allMenus) {
        $this->allMenus = $allMenus;
    }

    public function printMenu() {
        $this->allMenus->printMenu();
    }

    public function printVegetarianMenu() {
        $iterator = $this->allMenus->createIterator();
        echo '<br>VEGETERIAN MENU<br>';
        echo '---------------------------------------<br>';
        while ($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            try {
                if ($menuComponent->isVegetarian()) {
                    $menuComponent->printMenu();
                }
            } catch (ErrorException $e) {
                
            }
        }
    }

}
