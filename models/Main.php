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
    // map data
    public static function getAllMapData()
    {
        $database = Db::getConnection();
        $itemList = array();

          $result = $database->query('select id, latitude, longitude, location_status from customers');
        $i = 0;
        $itemList = array();

        while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['latitude'] = $row['latitude'];
            $itemList[$i]['longitude'] = $row['longitude'];
            $itemList[$i]['location_status'] = $row['location_status'];
            $i++;
        }
        return json_encode($itemList);
    }


    public static function getFreeSpace()
    {
        $database = Db::getConnection();
        $itemList = array();

        $result = $database->query('select id, location_status from customers where location_status = 0');
        $i = 0;
        $itemList = array();

        while ($row = $result->fetch(PDO::FETCH_BOTH)) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['location_status'] = $row['location_status'];
            $i++;
        }

        return $itemList;

    }


}
