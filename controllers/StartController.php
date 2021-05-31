<?php

include_once ROOT. '/models/Start.php';



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






    


}

