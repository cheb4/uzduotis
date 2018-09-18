<?php

echo "cia randasi Admin.php <hr>";
include ROOT . '/db/Db.php';


define("PER_PAGE", 10);


class Admin
{
    public static function getAllData()
    {
        // $database = new Db();
        // echo "prisijunge prie db";
        $db = Db::getConnection();
        $itemList = array();

        $result = $db->query('SELECT * FROM `customers`');

        // $name = $_POST["name"];
        // $surname = $_POST["surname"];
        // $town = $_POST["town"];
        // $orderSize = $_POST["orderSize"];
        // $phoneNumber = $_POST["phoneNumber"];
        // $comment = $_POST["comment"];

        $i = 0;
        while($row = $result->fetch()) {
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['name'] = $row['name'];
            $itemList[$i]['surname'] = $row['surname'];
            $itemList[$i]['city'] = $row['city'];
            $itemList[$i]['orderNum'] = $row['orderNum'];
            $itemList[$i]['phone'] = $row['phone'];
            $itemList[$i]['comment'] = $row['comment'];
            $i++;

        }


        // print_r($newsItem);
        echo "<hr>";
         return $itemList;
    }

    public static function echoOPA(){
        echo "<hr>opa yra is funkcijos<hr>";
    }

    public static function getPagination($sorting)
    {
       $db = Db::getConnection();
       // define how many results you want per page
        $results_per_page = PER_PAGE;
        // find out the number of results stored in database
        $sql='SELECT * FROM customers';
        $result = $db->query($sql);
        $number_of_results = $result->rowcount();
        $number_of_pages = ceil($number_of_results/$results_per_page);
        if (!isset($_GET['page'])) {
              $page = 1;
        } else {
              $page = $_GET['page'];
            }
        $this_page_first_result = ($page-1)*$results_per_page;
        // retrieve selected results from database and display them on page
        $sql=$sorting.' LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = $db->query($sql);

        $i = 0;

        $itemList = array();

        while($row = $result->fetch(PDO::FETCH_BOTH)) {
        // echo $row['id'] . ' ' . $row['name']. ' ' .$row['surname'].'<br>';
            $itemList[$i]['id'] = $row['id'];
            $itemList[$i]['name'] = $row['name'];
            $itemList[$i]['surname'] = $row['surname'];
            $itemList[$i]['city'] = $row['city'];
            $itemList[$i]['orderNum'] = $row['orderNum'];
            $itemList[$i]['phone'] = $row['phone'];
            $itemList[$i]['comment'] = $row['comment'];
            $i++;
        }
// display the links to the pages
        // for ($page=1;$page<=$number_of_pages;$page++) {
        //   echo '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
        // }
        return $itemList;

        // echo "$number_of_results";

    }

    public static function getPaginationNum()
        {
       $db = Db::getConnection();
       // define how many results you want per page
        $results_per_page = PER_PAGE;
        // find out the number of results stored in database
        $sql='SELECT * FROM customers';
        $result = $db->query($sql);
        $number_of_results = $result->rowcount();
        $number_of_pages = ceil($number_of_results/$results_per_page);
        if (!isset($_GET['page'])) {
              $page = 1;
        } else {
              $page = $_GET['page'];
            }
        $this_page_first_result = ($page-1)*$results_per_page;
        // retrieve selected results from database and display them on page
        $sql='SELECT * FROM customers LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
        $result = $db->query($sql);

        // $pageList = array();

        // for ($page=1;$page<=$number_of_pages;$page++) {
        //   $pageList[] = '<a href="index.php?page=' . $page . '">' . $page . '</a> ';
        // }
        return $number_of_pages;

        // echo "$number_of_results";

    }


        public static function getByID($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM customers WHERE id=' . $id);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $item = $result->fetch();

            return $item;
        }

    }




}