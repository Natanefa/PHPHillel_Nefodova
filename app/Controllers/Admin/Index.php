<?php

namespace App\Controllers\Admin;

use Core\View;

class Index extends AbstractController
{
    public function index()
    {
        View::view('Index');
    }

    private $modelClass;

    public function __construct()
    {
        $this->modelClass = new \App\Models\Index();
    }

    public function titles()
    {
       $titles = $this->modelClass->getAllTitles();
       View::view('Home' . $titles);
    }
}