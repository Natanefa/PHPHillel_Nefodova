<?php


namespace App\Controllers\Admin;

use Core\View;


class AbstractController
{
public function gener($name, $data = null)
{
    View::view($name, $data);
}
}