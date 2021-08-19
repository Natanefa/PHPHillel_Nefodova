<?php

namespace Core;

use Controllers\Admin\Index;
use Controllers\Home\notFound;

final class Router
{

    private $route;

    function __construct()
    {
        $this->route = $_SERVER["PATH_INFO"] ?? null;
    }

    public function getURI()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            return trim($_SERVER["PATH_INFO"], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        if (empty($uri)) {
            $controllerNameSpace = '\App\Controller\Index';
        } else {
            $controllerNameSpace = '\App\Controller\\' . ucfirst($uri);
        }
        var_export($controllerNameSpace);

        if(class_exists($controllerNameSpace)) {
            $classObj = new $controllerNameSpace;
        } else {
            $classObj = new \App\AppFirstClass;
        }

        $classObj->index();
    }
}