<?php
/**
 * Created by PhpStorm.
 * User: Mhrustik
 * Date: 27.02.2017
 * Time: 17:47
 */

namespace App\Controllers\route;

$url = $_SERVER['REQUEST_URI'];

$mainController = new \App\Controllers\Main();
$seoController = new \App\Controllers\Seo();
$adminController = new \App\Controllers\admin\Admin();

switch ($url) {
    case '/':
        $mainController->action('Index');
        break;
    case '/admin':
        $adminController->action('Index');
        break;
    case '/robots.txt':
        $seoController->action('Robots');
        break;
    case '/sitemap.xml':
        $seoController->action('Sitemap');
        break;
    default:
        $mainController->action('Index');
}