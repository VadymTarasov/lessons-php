<?php

namespace App;

use PDO;
use PDOException;

class ConnectionDB
{
    protected PDO $db;
    private string $server = "mysql:dbname=db2;host=127.0.0.1";
    private string $username = "root";
    private string $password = "";


    public function __construct()
    {

        try {
            $this->db = new PDO($this->server, $this->username, $this->password);
            echo 'good DB';
            foreach($this->db->query('SELECT * FROM `db2`.`products`') as $row) {
                print_r($row);
            }
            $db = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

    }



}
$test = new ConnectionDB();
