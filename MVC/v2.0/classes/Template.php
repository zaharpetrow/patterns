<?php

class Template {

    private $registry;
    private $vars = [];

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function set($varname, $value, $overwrite = false) {
        if (isset($this->vars[$varname]) && !$overwrite) {
            trigger_error("Unable to set var `$varname`. Already set, and overwrite not allowed.", E_USER_NOTICE);
            return FALSE;
        }
        $this->vars[$varname] = $value;
        return TRUE;
    }

    public function remove($varname) {
        unset($this->vars[$varname]);
        return TRUE;
    }

}
