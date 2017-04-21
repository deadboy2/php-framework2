<?php

namespace App\Controllers;


use App\TController;

class Seo
{
    use TController;

    protected function actionRobots()
    {
        $this->view->display(__DIR__ . '/../templates/robots.txt');
    }

    protected function actionSitemap()
    {
        $this->view->display(__DIR__ . '/../templates/sitemap.xml');
    }
}