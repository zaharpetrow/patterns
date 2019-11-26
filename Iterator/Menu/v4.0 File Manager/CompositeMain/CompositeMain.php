<?php

abstract class CompositeMain {

    public $name = '';

    public function add(CompositeMain $object) {
        throw new UnsupportedOperationException();
    }

    public function remove(CompositeMain $object) {
        throw new UnsupportedOperationException();
    }

    public function getName(): string {
        return $this->name;
    }

    public function scanDir() {
        throw new UnsupportedOperationException();
    }

    public function isFile() {
        throw new UnsupportedOperationException();
    }

    public function printR() {
        throw new UnsupportedOperationException();
    }

    abstract public function stackIterator();
}
