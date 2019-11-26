<?php

require_once __DIR__ . '/../MenuComponent/MenuComponent.php';
require_once __DIR__ . '/../Iterators/NullIterator.php';

class MenuItem extends MenuComponent {

    public $name;
    public $description;
    public $vegetarian;
    public $price;

    public function __construct(string $name, string $description, bool $vegetarian, float $price) {
        $this->name        = $name;
        $this->description = $description;
        $this->vegetarian  = $vegetarian;
        $this->price       = $price;
    }

    public function getChild(int $i): MenuComponent {
        return $this->menuComponents->get($i);
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function isVegetarian(): bool {
        return $this->vegetarian;
    }

    public function printMenu() {
        echo '------' . $this->getName();
        if ($this->isVegetarian()) {
            echo '(v)';
        }
        echo ', ' . $this->getPrice();
        echo '     --' . $this->getDescription();
        echo '<br>';
    }

    public function createIterator(): NullIterator {
        return new NullIterator();
    }

}
