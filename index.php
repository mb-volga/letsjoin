<?php
/**
 * Точка входа в приложение
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

if (version_compare(phpversion(), '5.4.0', '<') == true) 
{
    die ('PHP5.5 Only'); 
}

define('APP_DIR', __DIR__);
require_once APP_DIR . '/core/views/Twig/Autoloader.php';
Twig_Autoloader::register();

require_once  APP_DIR . '/core/components/autoload.php';
spl_autoload_register('__autoload');

# Отдаем полученный запрос роутеру, чтобы понять, что нужно клиенту.
try {
    Session::start();
    Router::rout()->start();
} catch (Exception $exc) {
    $data['line'] = $exc->getLine();
    $data['file'] = $exc->getFile();
    $data['code'] = $exc->getCode();
    $data['msg'] = $exc->getMessage();
    Logger::writeLogs($data);
    echo $exc->getMessage();
}