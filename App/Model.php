<?php

namespace App;


class Model
{
    public static function create()
    {
        $sql = "INSERT INTO people (name, family, age) VALUES(:name, :family, :age)";
        $create = new Db();
        $create->execute($sql, $_POST);
    }

    public static function findAll()
    {
        $sql = "SELECT name, family, age FROM people WHERE age >= 18";

        $create = new Db();
        return $create->query($sql);
    }


}