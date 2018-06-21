<?php

namespace App;

use PDO;

class Db
{
    public $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=192.168.10.10;dbname=google', 'homestead', 'secret');
        $this->dbh->exec("set names utf8");
    }

    public function execute($sql, $params)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }


    public function query($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (false !== $res) {
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

}