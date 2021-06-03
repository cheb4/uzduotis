<?php

include_once ROOT. '/models/Start.php';
// include_once ROOT. '/models/Admin.php';


class StartController
{
    public function displayEverything()
    {
        $stuff = Start::getAllMapData();

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

