<?php
class Db
{

    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);


        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};charset=utf8";
        $db = new PDO($dsn, $params['user'], $params['password']);

        return $db;
    }
}
