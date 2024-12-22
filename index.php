<?php

//Отображаем все ошибки
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Запускаем сессию на всех страницах
session_start();
//Подключяем системные файлы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/router.php');
require_once(ROOT.'/components/Db.php');
//require_once(ROOT.'/components/autoload.php');
//Вызов роутера

$router = new Router();
$router->run();
//Подключаем футер на все страницы
 