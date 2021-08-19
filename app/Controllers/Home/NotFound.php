<?php

namespace App\Controllers\Home;

use Core\View;

class notFound
{
    public function index()
    {
        View::view('notFound');
    }
}