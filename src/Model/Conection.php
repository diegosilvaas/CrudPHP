<?php

namespace Diego\CrudPhp\Model;

class Conection
{

    protected static $db;
    private $host = 'localhost';
    private $password = '';
    private $user = 'root';
    private $dbName = 'crud';

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        try {
            self::$db = new \PDO("mysql:dbname=$this->dbName;host=$this->host", $this->user, $this->password);
        } catch (\PDOException $erro) {
            echo $erro->getMessage();
        }
    }

    public static function getDb()
    {
        if (!self::$db) {
            new Conection();
        }
        return self::$db;
    }
}
