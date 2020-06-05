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
        $db = Db::getConnection();


        $sql = "DELETE FROM `customers` WHERE " . $data . ";";


        $result = $db->query($sql);
    }
}
