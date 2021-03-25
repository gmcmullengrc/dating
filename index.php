<?php

// George McMullen
// Jan 28 2021
// PHP for the index for COACH.DATING

//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once("vendor/autoload.php");

//create an instance of the base class
$f3 = Base::instance();

//set fat-free debugging
$f3->set('DEBUG', 3);

$f3->route('GET /', function(){
    // render home.html
    $view = new Template();
    echo $view->render('views/home.html');
});