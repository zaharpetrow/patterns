<?php

class MenuItem {

    public $name;
    public $description;
    public $vegetarian;
    public $price;

    public function __construct(string $name, string $description, bool $vegetarian, int $price) {
        $this->name        = $name;
        $this->description = $description;
        $this->vegetarian  = $vegetarian;
        $this->price       = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function isVegetarian(): bool {
        return $this->vegetarian;
    }

}
