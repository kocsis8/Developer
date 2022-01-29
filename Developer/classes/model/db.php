<?php

namespace  Classes\Model;

class Db
{
    public static function Query($sql, $params = [])
    {
        if (!self::$pdo)
        {
            self::$pdo = new \PDO("mysql:host=localhost;dbname=developer; charset=utf8mb4","admin","admin");
        }
        $query = self::$pdo -> prepare($sql);
        $query->execute($params);

        return $query;
    }
    public static function Select($table,$cols = "*",$where = null)
    {
        $sql = "SELECT ".$cols." FROM" . $table;
        if($where) $sql.=("WHERE ".$where);

        $query = self::Query($sql);
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    private static $pdo = null;
}