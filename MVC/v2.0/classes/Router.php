<?php

class Router {

    private $registry;
    private $path;
    private $args = [];

    public function __construct($registry) {
        $this->registry = $registry;
    }

    public function setPath($path) {
        $path = trim($path, '/\\');
        $path .= DIRSEP;

        if (!is_dir($path)) {
            throw new Exception("Invalid controller path: `$path`");
        }
        $this->path = $path;
    }

    public function delegate() {
        $this->getController($file, $controller, $action, $args);

        if (!is_readable($file)) {
            die('404 Not Found');
        }

        require_once $file;

        $class      = "Controller_$controller";
        $controller = new $class($this->registry);

        if (!is_callable([$controller, $action])) {
            die('404 Not Found');
        }

        $controller->$action();
    }

    private function getController(&$file, &$controller, &$action, &$args) {
        $route = (empty($_GET['route'])) ? 'index' : $_GET['route'];

        $route = trim($route, '/\\');
        $parts = explode('/', $route);

        $cmd_path = $this->path;

        foreach ($parts as $part) {
            $fullpath = $cmd_path . $part;

            if (is_dir($fullpath)) {
                $cmd_path .= $part . DIRSEP;
                array_shift($parts);
                continue;
            }

            if (is_file($fullpath . '.php')) {
                $controller = $part;
                array_shift($parts);
                break;
            }
        }

        if (empty($controller)) {
            $controller = 'index';
        }

        $action = array_shift($parts);

        if (empty($action)) {
            $action = 'index';
        }

        $file = $cmd_path . $controller . '.php';
        $args = $parts;
    }

}
