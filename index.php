<?php
require 'vendor/autoload.php';

use Core\Router;

$obj = new App\AppFirstClass();
echo $obj->a, "\n";

$routerObj = new Router();
$routerObj->run();