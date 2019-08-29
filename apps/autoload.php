<?php

define('DIR_SEP', DIRECTORY_SEPARATOR);
define('URL_SEP', '/');
$root_path = realpath(__DIR__ . DIR_SEP . '..') . DIR_SEP;
$apps_path = $root_path . 'apps' . DIR_SEP;
$route     = $_SERVER['REQUEST_URI'];
$route     = trim($route, DIR_SEP . URL_SEP);

/**
 * Class loader
 */
require $apps_path . 'engine' . DIR_SEP . 'classes' . DIR_SEP . 'autoload.php';
require $apps_path . 'engine' . DIR_SEP . 'classes' . DIR_SEP . 'console.php';

engine\path::set('root', $root_path);
engine\path::set('board_storage', $apps_path . 'board' . DIR_SEP . 'storage' . DIR_SEP);
