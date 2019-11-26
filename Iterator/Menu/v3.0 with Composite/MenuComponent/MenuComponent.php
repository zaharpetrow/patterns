<?php

abstract class MenuComponent {

    public function add(MenuComponent $menuComponent) {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function remove(MenuComponent $menuComponent) {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function getChild(int $i): MenuComponent {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function getName(): string {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function getDescription(): string {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function getPrice(): float {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function isVegetarian(): bool {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    public function printMenu() {
        throw new ErrorException('Метод ' . __METHOD__ . ' не определен.');
    }

    abstract public function createIterator();
}
