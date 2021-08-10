<?php

namespace Core;

use App\AppClassSecond;

final class Router
{
    private $path;
    public function __construct()
    {
            $this->path = $_SERVER["PATH_INFO"] ?? NULL;
    }
    public function run()
    {
        if ($this->path) {
            $classNamespace = 'App\\' . ucfirst(ltrim($this->path, '/'));
            if (class_exists($classNamespace)) {
                $routerObject = new $classNamespace;
            } else {
                $routerObject = new AppClassSecond();
            }
        } else {
            $routerObject = new AppClassSecond();
        }
        $routerObject->index();
    }
}