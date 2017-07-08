<?php
/**
 * Created by PhpStorm.
 * User: Mhrustik
 * Date: 27.02.2017
 * Time: 17:47
 */

namespace App\Controllers\route;

// Получаем текущий полный URL
//$url = parse_url("https://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);

$url = parse_url("http://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);

$mainController = new \App\Controllers\Main();
$errorController = new \App\Controllers\Error();
$seoController = new \App\Controllers\Seo();
$adminController = new \App\Controllers\admin\Admin();

switch ($url['path']) {
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
        $errorController->action('PageNotFound');
}
