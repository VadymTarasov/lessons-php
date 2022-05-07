<?php

namespace Db;

use PDO;

class Db
{
    public PDO $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:dbname=db;host=127.0.0.1", "root", "");
    }

    public function getAllCities(): array
    {
        $arr = [];
        $cityAllName = $this->db->query("SELECT `name` FROM `db`.`city`");
        foreach ($cityAllName as $cityName) {
            $arr[] = $cityName['name'];
        }
        return $arr;
    }
}
