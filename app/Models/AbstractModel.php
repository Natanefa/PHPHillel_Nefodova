<?php


namespace App\Models;


class AbstractModel
{
    private $dbConnect;

    public function __construct()
    {
        $connector = new DbConnector();
        $this->dbConnect = $connector->connect();
    }

    public function getAllTitles()
    {
        $sql = 'SELECT * FROM main;';
        $result = $this->dbConnect->exec($sql);
    }

    public $titles = [
        'title1' => 'My First title',
        'title2' => 'My Second title',
        'title3' => 'My Thirst title'
    ];
}