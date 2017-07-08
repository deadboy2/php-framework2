<?php

namespace App\Controllers;

use App\TController;

class Main
{
    use TController;

    protected function actionIndex()
    {
        $this->view->title = "Главная";
        $this->view->flag = "main";
        $this->view->display(__DIR__ . '/../templates/master/main/index.php');
    }
}