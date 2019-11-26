<?php

require_once __DIR__ . '/PancakeHouse/PancakeHouseMenu.php';
require_once __DIR__ . '/Diner/DinerMenu.php';

class Alice {

    public function printMenu() {
        $pancakeHouseMennu = new PancakeHouseMenu();
        $dinerMenu         = new DinerMenu();

        $breakfastItems = $pancakeHouseMennu->getMenuItems();
        $lunchItems     = $dinerMenu->getMenuItems();

        for ($i = 0; $i < $breakfastItems->size(); $i++) {
            $menuItem = $breakfastItems->get($i);
            print("{$menuItem->getName()} {$menuItem->getPrice()} {$menuItem->getDescription()}<br>");
        }
        print '<br>';
        foreach ($lunchItems as $menuItem) {
            print("{$menuItem->getName()} {$menuItem->getPrice()} {$menuItem->getDescription()}<br>");
        }
    }

}
