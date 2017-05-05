<?php
/**
 * Created by PhpStorm.
 * User: Mhrustik
 * Date: 27.02.2017
 * Time: 17:47
 */

namespace App\Controllers\route;

// Получаем текущий полный URL
$url = parse_url("https://".$_SERVER["HTTP_HOST"].$_SERVER['REQUEST_URI']);

// Распетрушиваем путь на «папки»
$dirs = explode('/', $url['path']);

// Парсим переменные GET в глобальный массив $_GET
isset($url['query']) && parse_str($url['query'], $_GET);

// Декодируем в UTF-8 все символы, отличные от латиницы
for ($i=1; $i<(count($dirs)-1); $i++) {
    $dirs[$i]=urldecode($dirs[$i]);
}


$mainController = new \App\Controllers\Main();
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
        $mainController->action('Index');
}
