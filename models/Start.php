<?php

include ROOT . '/db/Db.php';

// 
// bandymas kad veiktu zemelapis, dabar sugedes
// 


class Start
{
    public static function getAllMapData()
    {
        $database = Db::getConnection();
        $itemList = array();
// clients

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
        // return $itemList;
    }
} 
