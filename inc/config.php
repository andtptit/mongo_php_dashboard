<?php 


// Error reporting
error_reporting(E_ALL);

// Session
session_start();

// Timezine
date_default_timezone_set("Asia/Ho_Chi_Minh");

// Basepath
define("BASEPATH", TRUE);

// Path root
define("ROOT", dirname(__DIR__) . DIRECTORY_SEPARATOR);

// Url - Silakan ubah disini
define("URL", "http://localhost/mongo_php_dashboard");

// Autoload
require_once ROOT . "vendor/autoload.php";

// Whoops
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
