<?php


namespace Components\DataBase;


class DbConnector
{
    private $dns = 'msql:dbname=HillelPHP;host=127.0.0.1:8889';
    private $user = 'root';
    private $password = 'root';

    public function __construct()
    {
        $dirPath = __DIR__;
        $config = require '../../config/db-config.php';

        $this->dns =
            $config['driver'] . ':' . 'dbname' . $config['dbname'] . ';host=' . $config['host'] . ':' . $config['port'];
    }

    public function connect()
    {
        return new PDO($this->dns, $this->user, $this->password);

    }
}