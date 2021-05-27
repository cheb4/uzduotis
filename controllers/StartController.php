<?php


class StartController
{


    public function actionDisplay()
    {

        require_once(ROOT . '/views/start/index.php');
        return true;
    }

}

