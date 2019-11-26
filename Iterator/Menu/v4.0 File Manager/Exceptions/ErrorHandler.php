<?php

require_once __DIR__ . '/UnsupportedOperationException.php';

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    if (!error_reporting()) {
        return;
    }

    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});
