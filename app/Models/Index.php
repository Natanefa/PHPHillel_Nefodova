<?php


namespace App\Models;

use App\Models\About;




class Index extends AbstractModel
{
    public array $index = [111, 222, 333];
    public function getAboutByIndex($title, $index)
    {
        if(array_key_exists($index, $this->index))
        {
            return $this->index[$index];
        } else {
            return false;
        }
    }

    public function list(): array
    {
        return $this->index;
    }
}