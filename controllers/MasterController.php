<?php

include_once ROOT. '/models/Master.php';



class MasterController
{
    
// gauna viska ir perduoda i action display
    public function displayEverything($sql)
    {
        $allResult = Master::getAllData();
        $itemList = Master::getPagination($sql);
        $pageNum = Master::getPaginationNum();

        require_once(ROOT . '/views/master/index.php');
    }
// action display kada gauna nuoruoda uzkrauna viska 
    public function actionDisplay()
    {
        $this->displayEverything("SELECT * FROM customers");
        return true;
    }


// sorting Starts here
// sort by ID 
        public function actionId_asc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`id` ASC");
        return true;
    }

        public function actionId_desc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`id` DESC");
        return true;
    }

// sort by name
        public function actionName_asc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`name` ASC");
        return true;
    }

        public function actionName_desc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`name` DESC");
        return true;
    }

// sort by surname
        public function actionSurname_asc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`surname` ASC");
        return true;
    }

        public function actionSurname_desc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`surname` DESC");
        return true;
    }

// sort by city
        public function actionCity_asc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`city` ASC");
        return true;
    }

        public function actionCity_desc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`city` DESC");
        return true;
    }
    
// sort by orderNum
        public function actionOrderNum_asc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`orderNum` ASC");
        return true;
    }

        public function actionOrderNum_desc()
    {
        $this->displayEverything("SELECT * FROM `customers` ORDER BY `customers`.`orderNum` DESC");
        return true;
    }

// sorting ends here


 public function getDetailsPage()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            $trimed = explode("-", trim($_SERVER['REQUEST_URI'], '/')); 
        return end($trimed);
        }
    }


    // details
    public function actionGetDetails()
    {
        $detailNuber = $this->getDetailsPage();
        if (is_numeric($detailNuber)) {
        $oneItem = Master::getByID($detailNuber);
        $oneMap = Admin::getByIDone($detailNuber);

        require_once(ROOT . '/views/master/details.php');
        }else{
            require_once(ROOT . '/views/master/error.php');
        }
       
        return true;
    }
    


}



  ?>