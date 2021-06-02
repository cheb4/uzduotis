<?php

include_once ROOT. '/models/Start.php';
// include_once ROOT. '/models/Admin.php';

// 

class StartController
{
    public function displayEverything()
    {
        $stuff = Start::getAllData();

        require_once(ROOT . '/views/start/index.php');
    }

    public function actionDisplay()
    {
        $this->displayEverything();
        // $allResult = Start::getAllData();
        // require_once(ROOT . '/views/start/index.php');
        return true;
    }

//     public function displayEverything($sql)
//     {
//         $allResult = Admin::getAllData();
//         $itemList = Admin::getPagination($sql);
//         $pageNum = Admin::getPaginationNum();
//         require_once(ROOT . '/views/start/index.php');
//         // require_once(ROOT . '/views/admin/index.php');
//     }
// // action display kada gauna nuoruoda uzkrauna viska 

//     public function actionDisplay()
//     {
//         $this->displayEverything("SELECT * FROM customers");
//         return true;
//     }





    


}

