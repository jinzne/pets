<?php
/*
 * Giang Nguyen
 * 5/11/2023
 * Sdev328/pets/index/php
 * Controller for pets project
 *
 */
//Turn on error reporting
ini_set('display_error',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an F3 (Fat-Free Framework) object
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function($f3) {


//Display a view page
    $view = new Template();
    echo $view->render('views/pets.html');
});

//Run Fat-Free
$f3->run();