<?php

require __DIR__ . '/autoloader.php';

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("CONTROLLER_PATH", ROOT . "/controllers/");
define("MODEL_PATH", ROOT . "/models/");
define("VIEWS_PATH", ROOT . "/views/");

//require_once("db.php");
//require_once("route.php");
require_once CONTROLLER_PATH . 'Controller.php';
require_once MODEL_PATH . 'Model.php';
require_once VIEWS_PATH . 'View.php';

// $db = new DB();
// echo $db->connectToDB();

Route::createRoute();

$test = new Test;
$test->comon();
