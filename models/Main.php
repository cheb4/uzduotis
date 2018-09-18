<?php

echo "cia randasi Main.php <hr> ";
include ROOT . '/db/Db.php';

/**
 * 
 */
class Main
{
    
    public static function insertDataToDatabase($data)
    {
        $db = Db::getConnection();

        $result = $db->query($data);
    }
}