<?php

require_once __DIR__ . '/../CompositeMain/CompositeMain.php';
require_once __DIR__ . '/../Iterator/StackIterator.php';

class DirsComponent extends CompositeMain {

    public $collection;
    public $path;

    public function __construct(string $name, string $path = '.') {
        $this->collection = new SplStack();
        $this->name       = $name;
        $this->path       = $path;
        $this->scanDir();
    }

    public function add(\CompositeMain $object) {
        $this->collection->push($object);
    }

    public function remove(\CompositeMain $object) {
        if (!in_array($object, $this->collection)) {
            throw new ObjectNotFoundException();
        }

        $searchKey = array_search($object, $this->collection);
        unset($this->collection[$searchKey]);
    }

    public function scanDir() {
        $thisDir = scandir($this->path);

        array_shift($thisDir);
        array_shift($thisDir);

        foreach ($thisDir as $fileName) {
            if (is_dir($this->path . '/' . $fileName)) {
                $this->add(new DirsComponent($fileName, $this->path . '/' . $fileName));
            } elseif (is_file($this->path . '/' . $fileName)) {
                $this->add(new FileLeaf($fileName));
            }
        }
    }

    public function printR() {
        $this->collection->rewind();

        echo '<ul>';
        while ($this->collection->valid()) {
            echo '<li>';
            if (!$this->collection->current()->isFile()) {
                echo $this->collection->current()->name;
            }
            echo $this->collection->current()->printR();
            echo '</li>';
            $this->collection->next();
        }
        echo '</ul>';
    }

    public function isFile() {
        return FALSE;
    }

    public function stackIterator() {
        return new StackIterator($this->collection);
    }

}
