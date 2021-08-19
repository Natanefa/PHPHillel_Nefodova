<?php

namespace App\Controllers\Home;

use Core\View;

class Gallery
{
    public function index()
    {
        View::view('Gallery');
    }
}