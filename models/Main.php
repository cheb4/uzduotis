<?php

include ROOT . '/db/Db.php';


class Main
{

    public static function insertDataToDatabase($data)
    {
        $db = Db::getConnection();

        $result = $db->query($data);
    }

    public static function removeDataFromDb($data)
    {

        $base = Db::getConnection();


        $sql = "DELETE FROM `customers` WHERE " . $data . ";";


        $result = $base->query($sql);
    }
}
