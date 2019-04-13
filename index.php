<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require vendor/autoload file
require_once('vendor/autoload.php');

//Create an instane of the Base class (instantiate Fat-Free)
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>Pet Home</h1>';
});

//Run Fat-free
$f3->run();