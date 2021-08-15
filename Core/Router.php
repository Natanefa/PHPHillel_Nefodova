<?php

namespace Core;

use App\AppClassSecond;
use App\Controllers\About;
use App\Controllers\Gallery;
use App\Controllers\Index;

final class Router
{
//    private $path;
//    public function __construct()
//    {
//            $this->path = $_SERVER["PATH_INFO"] ?? NULL;
//    }
//    public function run()
//    {
//        if ($this->path) {
//            $classNamespace = 'App\\' . ucfirst(ltrim($this->path, '/'));
//            if (class_exists($classNamespace)) {
//                $routerObject = new $classNamespace;
//            } else {
//                $routerObject = new AppClassSecond();
//            }
//        } else {
//            $routerObject = new AppClassSecond();
//        }
//        $routerObject->index();
    private $route;

    function __construct() {
        $this->route = $_SERVER["PATH_INFO"] ?? null;
    }

    public function getURI()
    {
        if(!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER["PATH_INFO"], '/');
        }
    }

    public function run() {
        $uri = $this->getURI();

        foreach ($this->route as $pattern =>$routes) {
            if(preg_match("~$pattern", $uri)) {
                $internalRoute = preg_replace("~$pattern", $routes, $uri);
                $segments = explode('/', $internalRoute);
                $controller = ucfirst(array_shift($segments)) . 'Controller';

                $action = 'action' . ucfirst(array_shift($segments));
                $parameters = $segments;

                $controllerFile = ROOT . '..App/Controllers/' . $controller . '.php';
                if(file_exists($controllerFile)) {
                    include($controllerFile);
                }
            }
        }
    }

}