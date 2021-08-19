<?php
require 'vendor/autoload.php';

use Core\Router;
use App\AppFirstClass;

$obj = new App\AppFirstClass();

$routerObj = new Router();
$routerObj->run();