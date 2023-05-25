<?php
error_reporting(0);
ini_set('date.timezone', 'Asia/Manila');
date_default_timezone_set('Asia/Manila');
require 'env.php';

// connection

// START THE SESSION
session_start();

// THIS WILL LOAD ONLY THE NEEDED CLASS
spl_autoload_register(function ($class) {

    include __DIR__ . '/autoloader.php';
    include __DIR__ . '/_autoloader.php';

    if (array_key_exists($class, $core_classes)) {
        require_once $core_classes[$class];
    }
});
