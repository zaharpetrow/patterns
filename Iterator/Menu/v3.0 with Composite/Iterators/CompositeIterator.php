<?php

require_once __DIR__ . '/interface/NewIterator.php';

class CompositeIterator implements NewIterator {

    public $stack;

    public function __construct(NewIterator $iterator) {
        $this->stack = new SplStack();
        $this->stack->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);

        $this->stack->push($iterator);
    }

    public function next() {
        if ($this->hasNext()) {
            $iterator  = $this->stack->top();
            $component = $iterator->next();
            if ($component instanceof Menu) {
                $this->stack->push($component->createIterator());
            }
            return $component;
        } else {
            return NULL;
        }
    }

    public function hasNext(): bool {
        if ($this->stack->isEmpty()) {
            return FALSE;
        } else {
            $iterator = $this->stack->top();
            if (!$iterator->hasNext()) {
                $this->stack->pop();
                return $this->hasNext();
            } else {
                return TRUE;
            }
        }
    }

}
