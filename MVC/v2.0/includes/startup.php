<?php

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    if (!error_reporting()) {
        return;
    }
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});
set_exception_handler(function($exeption) {
    echo $exeption->__toString() . ' ' . $exeption->getFile() . " <strong>on line</strong> " . $exeption->getLine();
    write_to_logfile($exeption);
});


define('DIRSEP', DIRECTORY_SEPARATOR);

$site_path = realpath(dirname(__FILE__) . DIRSEP . '..' . DIRSEP) . DIRSEP;

define('SITE_PATH', $site_path);

spl_autoload_register(function($class_name) {
    $filename = $class_name . '.php';
    $file     = SITE_PATH . 'classes' . DIRSEP . $filename;

    if (!file_exists($file)) {
        return FALSE;
    }

    require_once $file;
});

