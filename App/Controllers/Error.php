<?php

namespace App\Controllers;

use App\TController;

class Error
{
    use TController;

    protected function actionPageNotFound()
    {
        $this->view->display(__DIR__ . '/../templates/404.php');
    }
}