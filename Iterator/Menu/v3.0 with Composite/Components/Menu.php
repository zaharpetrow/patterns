<?php

require_once __DIR__ . '/../MenuComponent/MenuComponent.php';
require_once __DIR__ . '/../ArrayList/ArrayList.php';
require_once __DIR__ . '/../Iterators/CompositeIterator.php';

class Menu extends MenuComponent {

    public $menuComponents;
    public $iterator    = null;
    public $name        = '';
    public $description = '';

    public function __construct(string $name, string $description) {
        $this->name           = $name;
        $this->description    = $description;
        $this->menuComponents = new ArrayList();
    }

    public function add(\MenuComponent $menuComponent) {
        $this->menuComponents->add($menuComponent);
    }

    public function remove(\MenuComponent $menuComponent) {
        $this->menuComponents->remove($menuComponent);
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

    public function printMenu() {
        echo '<br>';
        echo $this->getName();
        echo ', ' . $this->getDescription();
        echo '<br>';
        echo '------------------------------------------------';
        echo '<br>';

        $iterator = $this->menuComponents->iterator();
        while ($iterator->hasNext()) {
            $menuComponent = $iterator->next();
            $menuComponent->printMenu();
        }
    }

    public function createIterator(): CompositeIterator {
        if ($this->iterator === NULL) {
            $this->iterator = new CompositeIterator($this->menuComponents->iterator());
        }
        return $this->iterator;
    }

}
