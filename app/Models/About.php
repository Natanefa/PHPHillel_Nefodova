<?php


namespace App\Models;


class About extends AbstractModel
{
    public array $title = [
        '123' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
        '456' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s',
        '789' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages'
    ];

    public function getAboutByTitle($title)
    {
        if(array_key_exists($title, $this->title))
        {
            return $this->title[$title];
        } else {
            return false;
        }
    }

    public function list(): array
    {
    return $this->title;
    }
}