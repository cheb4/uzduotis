<?php

include ROOT . '/db/Db.php';



class Start
{
    public static function getAllData()
    {
        $database = Db::getConnection();
        $itemList = array();
// clients

        $result = $database->query('SELECT * FROM `clients`');

     $i = 0;

        $itemList = array();

        while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['name'] = $row['name'];
            $itemList[$i]['surname'] = $row['surname'];
            $itemList[$i]['city'] = $row['city'];
            $itemList[$i]['orderNum'] = $row['orderNum'];
            $itemList[$i]['phone'] = $row['phone'];
            $itemList[$i]['comment'] = $row['comment'];
            $i++;
        }

        return $itemList;
    }
} 
