<?php
ini_set('date.timezone','Asia/Shanghai');
define('DS' , DIRECTORY_SEPARATOR);
define('ROOT_PATH' , dirname(dirname(__FILE__)));
define('__STATIC__' , '/static/');
require(ROOT_PATH.DS.'includes'.DS.'functions'.DS.'comm_func.php');
require(ROOT_PATH.DS.'includes'.DS.'driver.php');
require(ROOT_PATH.DS.'includes'.DS.'init.php');
require(ROOT_PATH.DS.'includes'.DS.'start.php');
?>