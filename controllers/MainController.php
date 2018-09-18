<?php

include_once ROOT. '/models/Main.php';


class MainController
{
    

    public function actionDisplay()
    {
        echo "<br>rodau viska  pirmam puslapyje<br>";
        require_once(ROOT . '/views/main/index.php');
        return true;
    }

    public function actionInsert()
    {
        echo "<br>rodau OPA <br>";
        echo "insertinu duomenis<br>";
        require_once(ROOT . '/views/main/sucsess.php');

        if( isset($_POST["name"]) || isset($_POST["surname"]) ) {
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $town = $_POST["town"];
        $orderSize = $_POST["orderSize"];
        $phoneNumber = $_POST["phoneNumber"];
        $comment = $_POST["comment"];
        $sql = "INSERT INTO `customers` (`id`, `name`, `surname`, `city`, `orderNum`, `phone`, `comment`) VALUES"." (NULL, '$name', '$surname', '$town', '$orderSize', '$phoneNumber', '$comment');";

        echo "$sql";
        Main::insertDataToDatabase($sql);

        }
        return true;
    }

        public function actionAntras()
    {
        echo "<br>rodau OPA antras<br>";
        return true;
    }
}



  ?>