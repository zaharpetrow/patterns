<?php

class Registry implements ArrayAccess {

    private $vars = [];

    public function set($key, $var) {
        if (isset($this->vars[$key])) {
            throw new Exception("Unable to set var $key. Already set.");
        }

        $this->vars[$key] = $var;
        return TRUE;
    }

    public function get($key) {
        if (!isset($this->vars[$key])) {
            return NULL;
        }
        return $this->vars[$key];
    }

    public function remove($key) {
        unset($this->vars[$key]);
    }

    public function offsetExists($offset) {
        return isset($this->vars[$offset]);
    }

    public function offsetGet($offset) {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value) {
        $this->set($offset, $value);
    }

    public function offsetUnset($offset) {
        unset($this->vars[$offset]);
    }

}
