<?php

class ConcreteObserverA implements \SplObserver {

    public function update(\SplSubject $subject) {
        if (!$subject instanceof Subject) {
            return;
        }

        if ($subject->state < 3) {
            print("ConcreteObserverA: Реагирует на событие.\n");
        }
    }

}

class ConcreteObserverB implements \SplObserver {

    public function update(\SplSubject $subject) {
        if (!$subject instanceof Subject) {
            return;
        }

        if ($subject->state == 0 || $subject->state >= 2) {
            print("ConcreteObserverB: Реагирует на событие.\n");
        }
    }

}
