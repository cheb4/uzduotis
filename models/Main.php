<?php

include ROOT . '/db/Db.php';


class Main
{

    public static function insertDataToDatabase($data)
    {
        $db = Db::getConnection();

        $result = $db->query($data);
    }

    // public static function removeDataFromDb($data)
    // {
    //     echo "kailad";
    //     $base = Db::getConnection();
    //     echo "kailad";

    //     $sql = "DELETE FROM `customers` WHERE " . $data . ";";


    //     $result = $base->query($sql);
    // }
}
