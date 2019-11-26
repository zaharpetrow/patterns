<?php

require_once __DIR__ . '/../CompositeMain/CompositeMain.php';

class FileLeaf extends CompositeMain {

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function stackIterator() {
        
    }

    public function printR() {
        echo $this->name;
    }

    public function isFile() {
        return TRUE;
    }

}
