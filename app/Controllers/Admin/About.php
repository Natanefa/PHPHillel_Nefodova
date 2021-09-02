<?php

namespace App\Controllers\Admin;

use Core\View;
//use app\Controllers\Admin\AbstractController;
//use app\Models\About;

class About extends AbstractController
{
    public function index()
    {
        $arr = [
            'key1' => 1,
            'key2' => 2,
            'key3' => 3
        ];

        View::view('About', $arr);

        $modelClass = new About();
        $list = $modelClass->list();
        $this->gener('About', $list);
    }

    public function about()
    {
        $modelObjAboutTitle = new About();
        $getByTitle = $this->$modelObjAboutTitle->getAboutByTitle('123');
        $this->gener('About', $getByTitle);
    }
}